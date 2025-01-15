<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeKeyAndValue>|null $IndexedAttributes
 * @property string|null $ObjectIdentifier
 */
class IndexAttachment extends Shape
{
    /**
     * @param array{
     *     IndexedAttributes?: list<AttributeKeyAndValue>|null,
     *     ObjectIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
