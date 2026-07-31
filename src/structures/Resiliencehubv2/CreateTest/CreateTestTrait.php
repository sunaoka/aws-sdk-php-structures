<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateTest;

trait CreateTestTrait
{
    /**
     * @param CreateTestRequest $args
     * @return CreateTestResponse
     */
    public function createTest(CreateTestRequest $args)
    {
        $result = parent::createTest($args->toArray());
        return new CreateTestResponse($result->toArray());
    }
}
