<?php

namespace Sunaoka\Aws\Structures\DirectConnect\StopBgpFailoverTest;

trait StopBgpFailoverTestTrait
{
    /**
     * @param StopBgpFailoverTestRequest $args
     * @return StopBgpFailoverTestResponse
     */
    public function stopBgpFailoverTest(StopBgpFailoverTestRequest $args)
    {
        $result = parent::stopBgpFailoverTest($args->toArray());
        return new StopBgpFailoverTestResponse($result->toArray());
    }
}
