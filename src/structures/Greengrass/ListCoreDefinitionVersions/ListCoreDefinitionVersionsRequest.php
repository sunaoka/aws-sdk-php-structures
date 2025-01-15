<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListCoreDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreDefinitionId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListCoreDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     CoreDefinitionId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
