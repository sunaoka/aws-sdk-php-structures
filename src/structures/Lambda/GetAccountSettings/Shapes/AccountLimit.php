<?php

namespace Sunaoka\Aws\Structures\Lambda\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalCodeSize
 * @property int|null $CodeSizeUnzipped
 * @property int|null $CodeSizeZipped
 * @property int|null $ConcurrentExecutions
 * @property int<0, max>|null $UnreservedConcurrentExecutions
 */
class AccountLimit extends Shape
{
    /**
     * @param array{
     *     TotalCodeSize?: int|null,
     *     CodeSizeUnzipped?: int|null,
     *     CodeSizeZipped?: int|null,
     *     ConcurrentExecutions?: int|null,
     *     UnreservedConcurrentExecutions?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
