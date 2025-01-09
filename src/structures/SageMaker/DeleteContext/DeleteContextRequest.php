<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextName
 */
class DeleteContextRequest extends Request
{
    /**
     * @param array{ContextName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
