<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendationItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationArn
 * @property 'AWS_RESOURCE'|'RECOMMENDATION'|null $type
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgentRecommendationItemsRequest extends Request
{
    /**
     * @param array{
     *     recommendationArn: string,
     *     type?: 'AWS_RESOURCE'|'RECOMMENDATION'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
