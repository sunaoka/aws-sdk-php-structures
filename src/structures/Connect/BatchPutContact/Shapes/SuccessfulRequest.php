<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RequestIdentifier
 * @property string|null $ContactId
 */
class SuccessfulRequest extends Shape
{
    /**
     * @param array{
     *     RequestIdentifier?: string|null,
     *     ContactId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
