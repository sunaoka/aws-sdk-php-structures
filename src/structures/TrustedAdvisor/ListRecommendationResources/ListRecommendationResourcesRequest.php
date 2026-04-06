<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'excluded'|'included'|null $exclusionStatus
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 * @property string $recommendationIdentifier
 * @property string|null $regionCode
 * @property 'ok'|'warning'|'error'|null $status
 */
class ListRecommendationResourcesRequest extends Request
{
    /**
     * @param array{
     *     exclusionStatus?: 'excluded'|'included'|null,
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null,
     *     recommendationIdentifier: string,
     *     regionCode?: string|null,
     *     status?: 'ok'|'warning'|'error'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
