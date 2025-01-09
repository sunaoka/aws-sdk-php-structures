<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeOpsItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OpsItemFilter> $OpsItemFilters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeOpsItemsRequest extends Request
{
    /**
     * @param array{
     *     OpsItemFilters?: list<Shapes\OpsItemFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
