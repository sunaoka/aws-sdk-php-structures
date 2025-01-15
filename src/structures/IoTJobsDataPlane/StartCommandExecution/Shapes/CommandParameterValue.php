<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartCommandExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S
 * @property bool|null $B
 * @property int|null $I
 * @property int|null $L
 * @property double|null $D
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $BIN
 * @property string|null $UL
 */
class CommandParameterValue extends Shape
{
    /**
     * @param array{
     *     S?: string|null,
     *     B?: bool|null,
     *     I?: int|null,
     *     L?: int|null,
     *     D?: double|null,
     *     BIN?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     UL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
