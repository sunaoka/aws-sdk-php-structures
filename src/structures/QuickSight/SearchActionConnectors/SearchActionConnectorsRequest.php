<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchActionConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\ActionConnectorSearchFilter> $Filters
 */
class SearchActionConnectorsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     Filters: list<Shapes\ActionConnectorSearchFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
