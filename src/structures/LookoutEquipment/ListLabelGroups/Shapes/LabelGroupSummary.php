<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabelGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LabelGroupName
 * @property string|null $LabelGroupArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class LabelGroupSummary extends Shape
{
    /**
     * @param array{
     *     LabelGroupName?: string|null,
     *     LabelGroupArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
