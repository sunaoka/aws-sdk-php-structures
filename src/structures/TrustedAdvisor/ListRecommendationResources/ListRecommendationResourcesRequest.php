<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'excluded'|'included' $exclusionStatus
 * @property int<1, 200> $maxResults
 * @property string $nextToken
 * @property string $recommendationIdentifier
 * @property string $regionCode
 * @property 'ok'|'warning'|'error' $status
 */
class ListRecommendationResourcesRequest extends Request
{
    /**
     * @param array{
     *     exclusionStatus?: 'excluded'|'included',
     *     maxResults?: int<1, 200>,
     *     nextToken?: string,
     *     recommendationIdentifier: string,
     *     regionCode?: string,
     *     status?: 'ok'|'warning'|'error'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
