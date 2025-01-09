<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeKeyAndValue> $Attributes
 * @property string $NextToken
 */
class BatchListObjectAttributesResponse extends Shape
{
    /**
     * @param array{
     *     Attributes?: list<AttributeKeyAndValue>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
