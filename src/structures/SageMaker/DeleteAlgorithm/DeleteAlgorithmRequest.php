<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAlgorithm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlgorithmName
 */
class DeleteAlgorithmRequest extends Request
{
    /**
     * @param array{AlgorithmName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
