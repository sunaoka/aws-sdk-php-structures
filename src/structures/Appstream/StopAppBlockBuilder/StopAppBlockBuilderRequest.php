<?php

namespace Sunaoka\Aws\Structures\Appstream\StopAppBlockBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopAppBlockBuilderRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
