<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionName
 */
class DeleteActionRequest extends Request
{
    /**
     * @param array{ActionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
