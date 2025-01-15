<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListResourceDefinitionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MaxResults
 * @property string|null $NextToken
 * @property string $ResourceDefinitionId
 */
class ListResourceDefinitionVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: string|null,
     *     NextToken?: string|null,
     *     ResourceDefinitionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
