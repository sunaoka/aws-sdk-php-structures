<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteParameterRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
