<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListResourceDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MaxResults
 * @property string $NextToken
 * @property string $ResourceDefinitionId
 */
class ListResourceDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string,
     *     NextToken?: string,
     *     ResourceDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
