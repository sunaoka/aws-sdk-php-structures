<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Namespace
 * @property string|null $MetricName
 * @property list<Shapes\DimensionFilter>|null $Dimensions
 * @property string|null $NextToken
 * @property 'PT3H'|null $RecentlyActive
 * @property bool|null $IncludeLinkedAccounts
 * @property string|null $OwningAccount
 */
class ListMetricsRequest extends Request
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     MetricName?: string|null,
     *     Dimensions?: list<Shapes\DimensionFilter>|null,
     *     NextToken?: string|null,
     *     RecentlyActive?: 'PT3H'|null,
     *     IncludeLinkedAccounts?: bool|null,
     *     OwningAccount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
