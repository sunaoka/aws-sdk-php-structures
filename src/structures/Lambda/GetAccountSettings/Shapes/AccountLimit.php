<?php

namespace Sunaoka\Aws\Structures\Lambda\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalCodeSize
 * @property int $CodeSizeUnzipped
 * @property int $CodeSizeZipped
 * @property int $ConcurrentExecutions
 * @property int<0, max> $UnreservedConcurrentExecutions
 */
class AccountLimit extends Shape
{
    /**
     * @param array{
     *     TotalCodeSize?: int,
     *     CodeSizeUnzipped?: int,
     *     CodeSizeZipped?: int,
     *     ConcurrentExecutions?: int,
     *     UnreservedConcurrentExecutions?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
