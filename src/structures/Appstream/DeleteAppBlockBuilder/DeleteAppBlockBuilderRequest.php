<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteAppBlockBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteAppBlockBuilderRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
