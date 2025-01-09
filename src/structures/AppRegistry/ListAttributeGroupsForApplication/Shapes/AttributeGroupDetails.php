<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAttributeGroupsForApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $createdBy
 */
class AttributeGroupDetails extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     name?: string,
     *     createdBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
