<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property list<string> $Metrics
 * @property int<0, 25> $MaxResults
 * @property string $NextToken
 * @property list<'DescribeDimensionKeys'|'GetDimensionKeyDetails'|'GetResourceMetrics'> $AuthorizedActions
 */
class ListAvailableResourceDimensionsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     Metrics: list<string>,
     *     MaxResults?: int<0, 25>,
     *     NextToken?: string,
     *     AuthorizedActions?: list<'DescribeDimensionKeys'|'GetDimensionKeyDetails'|'GetResourceMetrics'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
