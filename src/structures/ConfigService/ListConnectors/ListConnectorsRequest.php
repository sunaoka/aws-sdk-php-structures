<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\ConnectorFilter>|null $Filters
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\ConnectorFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
