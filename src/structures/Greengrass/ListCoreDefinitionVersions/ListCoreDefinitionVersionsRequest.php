<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListCoreDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreDefinitionId
 * @property string $MaxResults
 * @property string $NextToken
 */
class ListCoreDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     CoreDefinitionId: string,
     *     MaxResults?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
