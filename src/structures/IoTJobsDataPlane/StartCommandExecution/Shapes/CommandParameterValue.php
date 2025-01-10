<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartCommandExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property bool $B
 * @property int $I
 * @property int $L
 * @property double $D
 * @property string|resource|\Psr\Http\Message\StreamInterface $BIN
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
     *     BIN?: string|resource|\Psr\Http\Message\StreamInterface,
     *     UL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
