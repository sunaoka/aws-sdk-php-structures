<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property list<string> $MetricTypes
 * @property string|null $NextToken
 * @property int<0, 25>|null $MaxResults
 */
class ListAvailableResourceMetricsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     MetricTypes: list<string>,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
