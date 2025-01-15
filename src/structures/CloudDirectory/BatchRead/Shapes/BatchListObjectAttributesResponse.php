<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeKeyAndValue>|null $Attributes
 * @property string|null $NextToken
 */
class BatchListObjectAttributesResponse extends Shape
{
    /**
     * @param array{
     *     Attributes?: list<AttributeKeyAndValue>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
