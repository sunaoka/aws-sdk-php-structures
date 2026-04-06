<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceComponentName
 */
class DescribeInferenceComponentRequest extends Request
{
    /**
     * @param array{InferenceComponentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
