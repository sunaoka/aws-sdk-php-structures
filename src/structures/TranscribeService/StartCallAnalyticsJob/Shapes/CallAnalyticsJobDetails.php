<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CallAnalyticsSkippedFeature> $Skipped
 */
class CallAnalyticsJobDetails extends Shape
{
    /**
     * @param array{Skipped?: list<CallAnalyticsSkippedFeature>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
