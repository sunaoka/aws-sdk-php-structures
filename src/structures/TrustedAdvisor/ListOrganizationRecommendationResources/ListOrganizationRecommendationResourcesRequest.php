<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $affectedAccountId
 * @property 'excluded'|'included' $exclusionStatus
 * @property int<1, 200> $maxResults
 * @property string $nextToken
 * @property string $organizationRecommendationIdentifier
 * @property string $regionCode
 * @property 'ok'|'warning'|'error' $status
 */
class ListOrganizationRecommendationResourcesRequest extends Request
{
    /**
     * @param array{
     *     affectedAccountId?: string,
     *     exclusionStatus?: 'excluded'|'included',
     *     maxResults?: int<1, 200>,
     *     nextToken?: string,
     *     organizationRecommendationIdentifier: string,
     *     regionCode?: string,
     *     status?: 'ok'|'warning'|'error'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
