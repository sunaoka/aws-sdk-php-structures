<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 * @property int $maxResults
 * @property string $nextToken
 * @property 'SYSTEM'|'CUSTOMER' $origin
 */
class ListAIAgentVersionsRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     assistantId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     origin?: 'SYSTEM'|'CUSTOMER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
