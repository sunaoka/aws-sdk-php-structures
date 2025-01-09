<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeOpsItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OpsItemFilter> $OpsItemFilters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class DescribeOpsItemsRequest extends Request
{
    /**
     * @param array{
     *     OpsItemFilters?: list<Shapes\OpsItemFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
