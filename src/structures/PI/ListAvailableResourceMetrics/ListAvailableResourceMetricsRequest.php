<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property list<string> $MetricTypes
 * @property string $NextToken
 * @property int<0, 25> $MaxResults
 */
class ListAvailableResourceMetricsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     MetricTypes: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<0, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
