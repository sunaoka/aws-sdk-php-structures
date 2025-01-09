<?php

namespace Sunaoka\Aws\Structures\Appstream\StartAppBlockBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StartAppBlockBuilderRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
