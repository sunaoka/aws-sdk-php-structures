<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteSpaceRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
