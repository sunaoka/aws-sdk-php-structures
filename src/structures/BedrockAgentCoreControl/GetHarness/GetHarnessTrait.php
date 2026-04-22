<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness;

trait GetHarnessTrait
{
    /**
     * @param GetHarnessRequest $args
     * @return GetHarnessResponse
     */
    public function getHarness(GetHarnessRequest $args)
    {
        $result = parent::getHarness($args->toArray());
        return new GetHarnessResponse($result->toArray());
    }
}
