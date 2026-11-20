<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $linkId
 */
class LinkTarget extends Shape
{
    /**
     * @param array{linkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
