// app/commands/UserGeneratorCommand.php
 
<?php
 
use Illuminate\Console\Command;
 
class Import extends Command {
 
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cmd:generate';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Generate a new user";
 
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->line('Welcome to the user generator.');
        echo 'Start at ' . date("Y-m-d H:i:s") . ' -------------------';
        $home = new HomeController();
        $home->showWelcome();
        echo 'End at ' . date("Y-m-d H:i:s") . ' -------------------';
    }
 
}