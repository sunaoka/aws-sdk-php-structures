<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrialComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrialComponentName
 * @property string $TrialComponentArn
 * @property string $DisplayName
 * @property TrialComponentSource $TrialComponentSource
 * @property TrialComponentStatus $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $LastModifiedBy
 */
class TrialComponentSummary extends Shape
{
    /**
     * @param array{
     *     TrialComponentName?: string,
     *     TrialComponentArn?: string,
     *     DisplayName?: string,
     *     TrialComponentSource?: TrialComponentSource,
     *     Status?: TrialComponentStatus,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: UserContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
