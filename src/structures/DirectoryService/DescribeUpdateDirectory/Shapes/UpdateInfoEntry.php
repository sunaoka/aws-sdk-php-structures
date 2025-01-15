<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeUpdateDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property 'Updated'|'Updating'|'UpdateFailed'|null $Status
 * @property string|null $StatusReason
 * @property string|null $InitiatedBy
 * @property UpdateValue|null $NewValue
 * @property UpdateValue|null $PreviousValue
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 */
class UpdateInfoEntry extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     Status?: 'Updated'|'Updating'|'UpdateFailed'|null,
     *     StatusReason?: string|null,
     *     InitiatedBy?: string|null,
     *     NewValue?: UpdateValue|null,
     *     PreviousValue?: UpdateValue|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
