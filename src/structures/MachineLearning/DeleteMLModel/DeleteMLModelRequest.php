<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteMLModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 */
class DeleteMLModelRequest extends Request
{
    /**
     * @param array{MLModelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
