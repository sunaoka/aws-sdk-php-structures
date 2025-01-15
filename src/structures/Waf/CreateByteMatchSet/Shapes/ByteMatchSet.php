<?php

namespace Sunaoka\Aws\Structures\Waf\CreateByteMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ByteMatchSetId
 * @property string|null $Name
 * @property list<ByteMatchTuple> $ByteMatchTuples
 */
class ByteMatchSet extends Shape
{
    /**
     * @param array{
     *     ByteMatchSetId: string,
     *     Name?: string|null,
     *     ByteMatchTuples: list<ByteMatchTuple>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
