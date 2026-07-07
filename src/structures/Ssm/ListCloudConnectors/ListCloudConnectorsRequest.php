<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCloudConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 10>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\CloudConnectorFilter>|null $Filters
 */
class ListCloudConnectorsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 10>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\CloudConnectorFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
