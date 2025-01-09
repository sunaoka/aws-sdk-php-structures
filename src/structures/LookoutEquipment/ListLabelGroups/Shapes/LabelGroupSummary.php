<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabelGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelGroupName
 * @property string $LabelGroupArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class LabelGroupSummary extends Shape
{
    /**
     * @param array{
     *     LabelGroupName?: string,
     *     LabelGroupArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
