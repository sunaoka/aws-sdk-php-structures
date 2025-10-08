<?php

namespace Sunaoka\Aws\Structures\DirectConnect\StartBgpFailoverTest;

trait StartBgpFailoverTestTrait
{
    /**
     * @param StartBgpFailoverTestRequest $args
     * @return StartBgpFailoverTestResponse
     */
    public function startBgpFailoverTest(StartBgpFailoverTestRequest $args)
    {
        $result = parent::startBgpFailoverTest($args->toArray());
        return new StartBgpFailoverTestResponse($result->toArray());
    }
}
