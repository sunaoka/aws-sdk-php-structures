<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeOpsItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OpsItemFilter>|null $OpsItemFilters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeOpsItemsRequest extends Request
{
    /**
     * @param array{
     *     OpsItemFilters?: list<Shapes\OpsItemFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
