<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListConnectorDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorDefinitionId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListConnectorDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     ConnectorDefinitionId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
