<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributePath
 * @property AttributeValue $AttributeValue
 */
class AttributeOperation extends Shape
{
    /**
     * @param array{
     *     AttributePath: string,
     *     AttributeValue?: AttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
