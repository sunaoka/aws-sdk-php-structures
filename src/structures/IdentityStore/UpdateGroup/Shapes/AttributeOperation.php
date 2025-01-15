<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributePath
 * @property AttributeValue|null $AttributeValue
 */
class AttributeOperation extends Shape
{
    /**
     * @param array{
     *     AttributePath: string,
     *     AttributeValue?: AttributeValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
