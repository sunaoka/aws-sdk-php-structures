<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState;

trait TestStateTrait
{
    /**
     * @param TestStateRequest $args
     * @return TestStateResponse
     */
    public function testState(TestStateRequest $args)
    {
        $result = parent::testState($args->toArray());
        return new TestStateResponse($result->toArray());
    }
}
