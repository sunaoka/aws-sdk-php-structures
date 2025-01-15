<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Metric
 * @property int|null $PeriodInSeconds
 * @property Shapes\DimensionGroup $GroupBy
 * @property list<string>|null $AdditionalMetrics
 * @property Shapes\DimensionGroup|null $PartitionBy
 * @property array<string, string>|null $Filter
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
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
     *     PeriodInSeconds?: int|null,
     *     GroupBy: Shapes\DimensionGroup,
     *     AdditionalMetrics?: list<string>|null,
     *     PartitionBy?: Shapes\DimensionGroup|null,
     *     Filter?: array<string, string>|null,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
