<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $failed
 * @property array<string, string>|null $properties
 * @property \Aws\Api\DateTimeResult|null $seenAt
 */
class InstanceProperty extends Shape
{
    /**
     * @param array{
     *     failed?: bool|null,
     *     properties?: array<string, string>|null,
     *     seenAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
