<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrialArn
 * @property string|null $TrialName
 * @property string|null $DisplayName
 * @property TrialSource|null $TrialSource
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class TrialSummary extends Shape
{
    /**
     * @param array{
     *     TrialArn?: string|null,
     *     TrialName?: string|null,
     *     DisplayName?: string|null,
     *     TrialSource?: TrialSource|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
