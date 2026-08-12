<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'OPEN'|'CLOSED'|null $state
 * @property 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'|null $pillar
 */
class ListAgentRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     profileArn: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     state?: 'OPEN'|'CLOSED'|null,
     *     pillar?: 'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
