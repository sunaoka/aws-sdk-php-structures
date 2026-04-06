<?php

namespace Sunaoka\Aws\Structures\Wickr\ListSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $canStart11Call
 * @property bool|null $canVideoCall
 * @property bool|null $forceTcpCall
 */
class CallingSettings extends Shape
{
    /**
     * @param array{
     *     canStart11Call?: bool|null,
     *     canVideoCall?: bool|null,
     *     forceTcpCall?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
