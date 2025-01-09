<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListByteMatchSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ByteMatchSetId
 * @property string $Name
 */
class ByteMatchSetSummary extends Shape
{
    /**
     * @param array{
     *     ByteMatchSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
