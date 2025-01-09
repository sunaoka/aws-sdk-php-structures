<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Shapes\DimensionFilter> $Dimensions
 * @property string $NextToken
 * @property 'PT3H' $RecentlyActive
 * @property bool $IncludeLinkedAccounts
 * @property string $OwningAccount
 */
class ListMetricsRequest extends Request
{
    /**
     * @param array{
     *     Namespace?: string,
     *     MetricName?: string,
     *     Dimensions?: list<Shapes\DimensionFilter>,
     *     NextToken?: string,
     *     RecentlyActive?: 'PT3H',
     *     IncludeLinkedAccounts?: bool,
     *     OwningAccount?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
