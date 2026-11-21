<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductApiPage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentifierParts|null $identifierParts
 */
class ApiId extends Shape
{
    /**
     * @param array{identifierParts?: IdentifierParts|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
