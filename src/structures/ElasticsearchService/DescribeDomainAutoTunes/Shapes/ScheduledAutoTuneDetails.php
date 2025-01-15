<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainAutoTunes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property 'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING'|null $ActionType
 * @property string|null $Action
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Severity
 */
class ScheduledAutoTuneDetails extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     ActionType?: 'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING'|null,
     *     Action?: string|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
