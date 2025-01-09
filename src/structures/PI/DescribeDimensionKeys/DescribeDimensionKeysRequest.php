<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Metric
 * @property int $PeriodInSeconds
 * @property Shapes\DimensionGroup $GroupBy
 * @property list<string> $AdditionalMetrics
 * @property Shapes\DimensionGroup $PartitionBy
 * @property array<string, string> $Filter
 * @property int<0, 25> $MaxResults
 * @property string $NextToken
 */
class DescribeDimensionKeysRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Metric: string,
     *     PeriodInSeconds?: int,
     *     GroupBy: Shapes\DimensionGroup,
     *     AdditionalMetrics?: list<string>,
     *     PartitionBy?: Shapes\DimensionGroup,
     *     Filter?: array<string, string>,
     *     MaxResults?: int<0, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
