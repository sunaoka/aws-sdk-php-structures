<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeUpdateDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property 'Updated'|'Updating'|'UpdateFailed' $Status
 * @property string $StatusReason
 * @property string $InitiatedBy
 * @property UpdateValue $NewValue
 * @property UpdateValue $PreviousValue
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedDateTime
 */
class UpdateInfoEntry extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     Status?: 'Updated'|'Updating'|'UpdateFailed',
     *     StatusReason?: string,
     *     InitiatedBy?: string,
     *     NewValue?: UpdateValue,
     *     PreviousValue?: UpdateValue,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
