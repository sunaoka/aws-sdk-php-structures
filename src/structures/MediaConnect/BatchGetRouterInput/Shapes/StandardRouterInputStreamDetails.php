<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIpAddress
 */
class StandardRouterInputStreamDetails extends Shape
{
    /**
     * @param array{SourceIpAddress?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
