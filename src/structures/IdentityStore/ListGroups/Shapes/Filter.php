<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributePath
 * @property string $AttributeValue
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     AttributePath: string,
     *     AttributeValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
