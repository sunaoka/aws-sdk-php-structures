<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteComponentRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
