<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestMetricFilter;

trait TestMetricFilterTrait
{
    /**
     * @param TestMetricFilterRequest $args
     * @return TestMetricFilterResponse
     */
    public function testMetricFilter(TestMetricFilterRequest $args)
    {
        $result = parent::testMetricFilter($args->toArray());
        return new TestMetricFilterResponse($result->toArray());
    }
}
