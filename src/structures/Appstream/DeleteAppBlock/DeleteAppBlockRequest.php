<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteAppBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteAppBlockRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
