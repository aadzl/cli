<?php

namespace Tonik\CLI\Scaffolding;

use League\CLImate\CLImate;
use Tonik\CLI\Scaffolding\Presets\Bootstrap;
use Tonik\CLI\Scaffolding\Presets\Foundation;

class Scaffolder
{
    /**
     * Construct scaffolder.
     *
     * @param string $dir
     */
    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    /**
     * Build boilerplate of specified preset.
     *
     * @param  string $preset
     * @return void
     */
    public function build($preset)
    {
        $this->{$preset}();
    }

    /**
     * Scaffolds boilerplate for Foundation CSS framework.
     *
     * @return void
     */
    protected function foundation()
    {
        (new Foundation($this->dir))->scaffold();
    }

    /**
     * Scaffolds boilerplate for Bootstrap CSS framework.
     *
     * @return void
     */
    protected function bootstrap()
    {
        (new Bootstrap($this->dir))->scaffold();
    }
}
