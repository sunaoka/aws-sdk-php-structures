<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlgorithmName
 */
class DescribeAlgorithmRequest extends Request
{
    /**
     * @param array{AlgorithmName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
