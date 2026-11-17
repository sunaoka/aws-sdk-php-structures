<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteInferenceRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceRouterName
 */
class DeleteInferenceRouterRequest extends Request
{
    /**
     * @param array{InferenceRouterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
