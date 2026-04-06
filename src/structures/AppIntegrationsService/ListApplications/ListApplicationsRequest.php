<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property 'STANDARD'|'SERVICE'|'MCP_SERVER'|null $ApplicationType
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     ApplicationType?: 'STANDARD'|'SERVICE'|'MCP_SERVER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
