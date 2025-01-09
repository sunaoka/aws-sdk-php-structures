<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteStackRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
