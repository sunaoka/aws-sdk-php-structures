<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING'|null $statusFilter
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     statusFilter?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
