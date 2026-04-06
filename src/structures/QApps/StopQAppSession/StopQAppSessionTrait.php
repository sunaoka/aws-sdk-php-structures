<?php

namespace Sunaoka\Aws\Structures\QApps\StopQAppSession;

trait StopQAppSessionTrait
{
    /**
     * @param StopQAppSessionRequest $args
     * @return void
     */
    public function stopQAppSession(StopQAppSessionRequest $args)
    {
        parent::stopQAppSession($args->toArray());
    }
}
