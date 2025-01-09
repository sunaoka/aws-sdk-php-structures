<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $failed
 * @property array<string, string> $properties
 * @property \Aws\Api\DateTimeResult $seenAt
 */
class InstanceProperty extends Shape
{
    /**
     * @param array{
     *     failed?: bool,
     *     properties?: array<string, string>,
     *     seenAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
