<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrialComponentName
 * @property string|null $TrialComponentArn
 * @property TrialComponentSource|null $TrialComponentSource
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 */
class TrialComponentSimpleSummary extends Shape
{
    /**
     * @param array{
     *     TrialComponentName?: string|null,
     *     TrialComponentArn?: string|null,
     *     TrialComponentSource?: TrialComponentSource|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
