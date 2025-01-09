<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateByteMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property ByteMatchTuple $ByteMatchTuple
 */
class ByteMatchSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     ByteMatchTuple: ByteMatchTuple
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
