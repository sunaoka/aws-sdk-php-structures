<?php

namespace Sunaoka\Aws\Structures\mgn\StartTest;

trait StartTestTrait
{
    /**
     * @param StartTestRequest $args
     * @return StartTestResponse
     */
    public function startTest(StartTestRequest $args)
    {
        $result = parent::startTest($args->toArray());
        return new StartTestResponse($result->toArray());
    }
}
