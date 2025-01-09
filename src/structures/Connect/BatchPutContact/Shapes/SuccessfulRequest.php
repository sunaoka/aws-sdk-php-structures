<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RequestIdentifier
 * @property string $ContactId
 */
class SuccessfulRequest extends Shape
{
    /**
     * @param array{
     *     RequestIdentifier?: string,
     *     ContactId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
