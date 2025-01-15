<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LabelGroupName
 * @property string|null $LabelId
 * @property string|null $LabelGroupArn
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL'|null $Rating
 * @property string|null $FaultCode
 * @property string|null $Equipment
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class LabelSummary extends Shape
{
    /**
     * @param array{
     *     LabelGroupName?: string|null,
     *     LabelId?: string|null,
     *     LabelGroupArn?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Rating?: 'ANOMALY'|'NO_ANOMALY'|'NEUTRAL'|null,
     *     FaultCode?: string|null,
     *     Equipment?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
