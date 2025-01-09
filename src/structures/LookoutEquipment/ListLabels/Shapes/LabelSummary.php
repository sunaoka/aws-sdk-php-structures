<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelGroupName
 * @property string $LabelId
 * @property string $LabelGroupArn
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL' $Rating
 * @property string $FaultCode
 * @property string $Equipment
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class LabelSummary extends Shape
{
    /**
     * @param array{
     *     LabelGroupName?: string,
     *     LabelId?: string,
     *     LabelGroupArn?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Rating?: 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL',
     *     FaultCode?: string,
     *     Equipment?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
