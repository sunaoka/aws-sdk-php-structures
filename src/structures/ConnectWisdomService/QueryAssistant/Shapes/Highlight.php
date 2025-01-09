<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $beginOffsetInclusive
 * @property int $endOffsetExclusive
 */
class Highlight extends Shape
{
    /**
     * @param array{
     *     beginOffsetInclusive?: int,
     *     endOffsetExclusive?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
