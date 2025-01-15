<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrialComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrialComponentName
 * @property string|null $TrialComponentArn
 * @property string|null $DisplayName
 * @property TrialComponentSource|null $TrialComponentSource
 * @property TrialComponentStatus|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $LastModifiedBy
 */
class TrialComponentSummary extends Shape
{
    /**
     * @param array{
     *     TrialComponentName?: string|null,
     *     TrialComponentArn?: string|null,
     *     DisplayName?: string|null,
     *     TrialComponentSource?: TrialComponentSource|null,
     *     Status?: TrialComponentStatus|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: UserContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
