<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $Identifier
 * @property list<string> $Metrics
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'DescribeDimensionKeys'|'GetDimensionKeyDetails'|'GetResourceMetrics'>|null $AuthorizedActions
 */
class ListAvailableResourceDimensionsRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     Identifier: string,
     *     Metrics: list<string>,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null,
     *     AuthorizedActions?: list<'DescribeDimensionKeys'|'GetDimensionKeyDetails'|'GetResourceMetrics'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
