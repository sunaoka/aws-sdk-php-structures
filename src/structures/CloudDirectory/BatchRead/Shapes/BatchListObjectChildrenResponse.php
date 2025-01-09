<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Children
 * @property string $NextToken
 */
class BatchListObjectChildrenResponse extends Shape
{
    /**
     * @param array{
     *     Children?: array<string, string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
