<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeKeyAndValue> $IndexedAttributes
 * @property string $ObjectIdentifier
 */
class IndexAttachment extends Shape
{
    /**
     * @param array{
     *     IndexedAttributes?: list<AttributeKeyAndValue>,
     *     ObjectIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
