<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAttributeGroupsForApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $createdBy
 */
class AttributeGroupDetails extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     createdBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
