<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<Usage> $usage
 */
class UsageTotal extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     usage?: list<Usage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
