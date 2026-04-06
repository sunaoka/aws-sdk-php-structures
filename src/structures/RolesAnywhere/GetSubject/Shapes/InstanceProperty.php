<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $seenAt
 * @property array<string, string>|null $properties
 * @property bool|null $failed
 */
class InstanceProperty extends Shape
{
    /**
     * @param array{
     *     seenAt?: \Aws\Api\DateTimeResult|null,
     *     properties?: array<string, string>|null,
     *     failed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
