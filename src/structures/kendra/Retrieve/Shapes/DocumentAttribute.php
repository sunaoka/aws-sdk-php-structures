<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property DocumentAttributeValue $Value
 */
class DocumentAttribute extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: DocumentAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
