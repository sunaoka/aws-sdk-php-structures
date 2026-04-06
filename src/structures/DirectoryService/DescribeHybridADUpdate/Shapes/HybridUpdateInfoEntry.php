<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeHybridADUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Updated'|'Updating'|'UpdateFailed'|null $Status
 * @property string|null $StatusReason
 * @property string|null $InitiatedBy
 * @property HybridUpdateValue|null $NewValue
 * @property HybridUpdateValue|null $PreviousValue
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 * @property string|null $AssessmentId
 */
class HybridUpdateInfoEntry extends Shape
{
    /**
     * @param array{
     *     Status?: 'Updated'|'Updating'|'UpdateFailed'|null,
     *     StatusReason?: string|null,
     *     InitiatedBy?: string|null,
     *     NewValue?: HybridUpdateValue|null,
     *     PreviousValue?: HybridUpdateValue|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     AssessmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
