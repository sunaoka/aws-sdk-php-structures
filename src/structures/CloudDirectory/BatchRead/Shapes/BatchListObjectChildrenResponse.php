<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Children
 * @property string|null $NextToken
 */
class BatchListObjectChildrenResponse extends Shape
{
    /**
     * @param array{
     *     Children?: array<string, string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
