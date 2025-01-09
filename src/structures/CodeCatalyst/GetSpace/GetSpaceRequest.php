<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetSpaceRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
