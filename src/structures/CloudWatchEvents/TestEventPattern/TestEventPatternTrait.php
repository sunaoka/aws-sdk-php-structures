<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\TestEventPattern;

trait TestEventPatternTrait
{
    /**
     * @param TestEventPatternRequest $args
     * @return TestEventPatternResponse
     */
    public function testEventPattern(TestEventPatternRequest $args)
    {
        $result = parent::testEventPattern($args->toArray());
        return new TestEventPatternResponse($result->toArray());
    }
}
