<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEGMENT'|'ONE_LINE'|'LINE_LENGTH' $wrapBy
 * @property 'CRLF'|'LF'|'CR'|null $lineTerminator
 * @property int<1, max>|null $lineLength
 */
class WrapOptions extends Shape
{
    /**
     * @param array{
     *     wrapBy: 'SEGMENT'|'ONE_LINE'|'LINE_LENGTH',
     *     lineTerminator?: 'CRLF'|'LF'|'CR'|null,
     *     lineLength?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
