<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhodes Island Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboardstyle.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <div class="overlay"></div>

        <header>
            <h1>Rhodes Island Command</h1>
            <p class="subtext">Tactical Operations Interface</p>
        </header>

        <main class="content">
            <div class="welcome-box">
                <div class="ri-logo">Rhodes Island</div>

                <h2>Welcome, <span>{{ Auth::user()->name ?? 'Doctor' }}</span></h2>
                <p class="intro-text">Systems synchronized. All operators standing by for deployment.</p>

                <div class="status-panel">
                    <p><span class="label">Active Mission:</span> None</p>
                    <p><span class="label">Base Status:</span> Stable</p>
                    <p><span class="label">Originium Contamination:</span> 0.03%</p>
                    <p><span class="label">Communication Link:</span> Online</p>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
