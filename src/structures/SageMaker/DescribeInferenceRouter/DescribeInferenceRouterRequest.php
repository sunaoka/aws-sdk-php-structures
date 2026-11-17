<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceRouterName
 */
class DescribeInferenceRouterRequest extends Request
{
    /**
     * @param array{InferenceRouterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
