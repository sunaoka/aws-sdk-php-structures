<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\TestSegmentPattern;

trait TestSegmentPatternTrait
{
    /**
     * @param TestSegmentPatternRequest $args
     * @return TestSegmentPatternResponse
     */
    public function testSegmentPattern(TestSegmentPatternRequest $args)
    {
        $result = parent::testSegmentPattern($args->toArray());
        return new TestSegmentPatternResponse($result->toArray());
    }
}
