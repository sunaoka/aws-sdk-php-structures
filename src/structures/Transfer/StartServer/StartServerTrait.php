<?php

namespace Sunaoka\Aws\Structures\Transfer\StartServer;

trait StartServerTrait
{
    /**
     * @param StartServerRequest $args
     * @return void
     */
    public function startServer(StartServerRequest $args)
    {
        parent::startServer($args->toArray());
    }
}
