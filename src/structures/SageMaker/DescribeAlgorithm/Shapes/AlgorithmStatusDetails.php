<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlgorithmStatusItem> $ValidationStatuses
 * @property list<AlgorithmStatusItem> $ImageScanStatuses
 */
class AlgorithmStatusDetails extends Shape
{
    /**
     * @param array{
     *     ValidationStatuses?: list<AlgorithmStatusItem>,
     *     ImageScanStatuses?: list<AlgorithmStatusItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
