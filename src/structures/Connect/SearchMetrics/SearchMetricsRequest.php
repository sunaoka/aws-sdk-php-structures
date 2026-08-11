<?php

namespace Sunaoka\Aws\Structures\Connect\SearchMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\MetricSearchFilter|null $SearchFilter
 * @property Shapes\MetricSearchCriteria|null $SearchCriteria
 */
class SearchMetricsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\MetricSearchFilter|null,
     *     SearchCriteria?: Shapes\MetricSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
