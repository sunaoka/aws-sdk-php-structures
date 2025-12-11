<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $beginOffsetInclusive
 * @property int|null $endOffsetExclusive
 */
class CitationSpan extends Shape
{
    /**
     * @param array{
     *     beginOffsetInclusive?: int|null,
     *     endOffsetExclusive?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
