<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\GetSupportPermit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $allowAfter
 * @property \Aws\Api\DateTimeResult|null $allowBefore
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     allowAfter?: \Aws\Api\DateTimeResult|null,
     *     allowBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
