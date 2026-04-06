<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer;

trait TestTransformerTrait
{
    /**
     * @param TestTransformerRequest $args
     * @return TestTransformerResponse
     */
    public function testTransformer(TestTransformerRequest $args)
    {
        $result = parent::testTransformer($args->toArray());
        return new TestTransformerResponse($result->toArray());
    }
}
