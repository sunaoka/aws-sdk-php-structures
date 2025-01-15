<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAlgorithms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlgorithmName
 * @property string $AlgorithmArn
 * @property string|null $AlgorithmDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting' $AlgorithmStatus
 */
class AlgorithmSummary extends Shape
{
    /**
     * @param array{
     *     AlgorithmName: string,
     *     AlgorithmArn: string,
     *     AlgorithmDescription?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     AlgorithmStatus: 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
