<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteFunctionRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
