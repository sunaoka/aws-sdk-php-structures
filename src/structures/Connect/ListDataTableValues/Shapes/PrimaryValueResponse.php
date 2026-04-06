<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTableValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property string|null $AttributeId
 * @property string|null $Value
 */
class PrimaryValueResponse extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     AttributeId?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
