<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainAutoTunes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Date
 * @property 'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING' $ActionType
 * @property string $Action
 * @property 'LOW'|'MEDIUM'|'HIGH' $Severity
 */
class ScheduledAutoTuneDetails extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult,
     *     ActionType?: 'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING',
     *     Action?: string,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
