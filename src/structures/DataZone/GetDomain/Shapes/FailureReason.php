<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $message
 */
class FailureReason extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
