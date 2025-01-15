<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CallAnalyticsSkippedFeature>|null $Skipped
 */
class CallAnalyticsJobDetails extends Shape
{
    /**
     * @param array{Skipped?: list<CallAnalyticsSkippedFeature>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
