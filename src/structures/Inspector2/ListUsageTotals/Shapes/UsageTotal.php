<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property list<Usage>|null $usage
 */
class UsageTotal extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     usage?: list<Usage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
