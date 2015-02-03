 <?php
 
use Illuminate\Console\Command;
 
class Delete extends Command {
 
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cmd:delete';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Delete a new user";
 
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->line('Welcome to the user deletor.');
        echo 'Start at ' . date("Y-m-d H:i:s") . ' -------------------';
        $home = new HomeController();
        $home->deleteUser();
        echo 'End at ' . date("Y-m-d H:i:s") . ' -------------------';
    }
 
}