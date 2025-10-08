<?php

namespace Sunaoka\Aws\Structures\Transfer\StopServer;

trait StopServerTrait
{
    /**
     * @param StopServerRequest $args
     * @return void
     */
    public function stopServer(StopServerRequest $args)
    {
        parent::stopServer($args->toArray());
    }
}
