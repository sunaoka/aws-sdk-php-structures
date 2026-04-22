<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarness;

trait CreateHarnessTrait
{
    /**
     * @param CreateHarnessRequest $args
     * @return CreateHarnessResponse
     */
    public function createHarness(CreateHarnessRequest $args)
    {
        $result = parent::createHarness($args->toArray());
        return new CreateHarnessResponse($result->toArray());
    }
}
