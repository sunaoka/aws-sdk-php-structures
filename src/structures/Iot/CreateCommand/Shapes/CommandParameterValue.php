<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property bool $B
 * @property int $I
 * @property int $L
 * @property double $D
 * @property string $BIN
 * @property string $UL
 */
class CommandParameterValue extends Shape
{
    /**
     * @param array{
     *     S?: string,
     *     B?: bool,
     *     I?: int,
     *     L?: int,
     *     D?: double,
     *     BIN?: string,
     *     UL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
