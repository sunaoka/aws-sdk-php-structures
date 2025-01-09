<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'SYSTEM'|'CUSTOMER' $origin
 */
class ListAIAgentsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     origin?: 'SYSTEM'|'CUSTOMER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
