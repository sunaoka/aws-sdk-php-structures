<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendationGenerations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 * @property 'RESOURCE'|'ARCHITECTURE'|'APPLICATION'|null $recommendationType
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgentRecommendationGenerationsRequest extends Request
{
    /**
     * @param array{
     *     profileArn: string,
     *     recommendationType?: 'RESOURCE'|'ARCHITECTURE'|'APPLICATION'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
