<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListVpcConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property 'CREATING'|'CREATED'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|null $statusFilter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListVpcConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     statusFilter?: 'CREATING'|'CREATED'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
