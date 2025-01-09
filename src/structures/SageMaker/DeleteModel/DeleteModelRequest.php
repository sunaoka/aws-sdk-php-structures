<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class DeleteModelRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
