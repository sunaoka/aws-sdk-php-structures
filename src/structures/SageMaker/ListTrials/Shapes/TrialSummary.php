<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrialArn
 * @property string $TrialName
 * @property string $DisplayName
 * @property TrialSource $TrialSource
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class TrialSummary extends Shape
{
    /**
     * @param array{
     *     TrialArn?: string,
     *     TrialName?: string,
     *     DisplayName?: string,
     *     TrialSource?: TrialSource,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
