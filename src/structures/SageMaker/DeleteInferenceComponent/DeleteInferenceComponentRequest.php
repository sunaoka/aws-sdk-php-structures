<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteInferenceComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceComponentName
 */
class DeleteInferenceComponentRequest extends Request
{
    /**
     * @param array{InferenceComponentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
