<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property AccountInsightHealth|null $Insight
 */
class AccountHealth extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Insight?: AccountInsightHealth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
