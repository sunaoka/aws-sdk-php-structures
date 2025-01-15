<?php

namespace Sunaoka\Aws\Structures\CloudFront\UntagResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Items
 */
class TagKeys extends Shape
{
    /**
     * @param array{Items?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
