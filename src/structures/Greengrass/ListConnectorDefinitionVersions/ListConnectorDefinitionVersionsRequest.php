<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListConnectorDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorDefinitionId
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListConnectorDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     ConnectorDefinitionId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
