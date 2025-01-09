<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformJobName
 */
class DescribeTransformJobRequest extends Request
{
    /**
     * @param array{TransformJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
