<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $aiAgentId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 */
class ListAIAgentVersionsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiAgentId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
