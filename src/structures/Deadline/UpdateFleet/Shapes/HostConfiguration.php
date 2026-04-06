<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scriptBody
 * @property int<300, 3600>|null $scriptTimeoutSeconds
 */
class HostConfiguration extends Shape
{
    /**
     * @param array{
     *     scriptBody: string,
     *     scriptTimeoutSeconds?: int<300, 3600>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
