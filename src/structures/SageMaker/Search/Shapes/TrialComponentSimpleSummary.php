<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrialComponentName
 * @property string $TrialComponentArn
 * @property TrialComponentSource $TrialComponentSource
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 */
class TrialComponentSimpleSummary extends Shape
{
    /**
     * @param array{
     *     TrialComponentName?: string,
     *     TrialComponentArn?: string,
     *     TrialComponentSource?: TrialComponentSource,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
