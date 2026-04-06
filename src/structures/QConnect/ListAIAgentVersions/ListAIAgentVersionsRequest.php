<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aiAgentId
 * @property string $assistantId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 */
class ListAIAgentVersionsRequest extends Request
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     assistantId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
