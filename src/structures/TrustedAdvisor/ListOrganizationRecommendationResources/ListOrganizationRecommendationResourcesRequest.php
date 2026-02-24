<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 * @property 'ok'|'warning'|'error'|null $status
 * @property 'excluded'|'included'|null $exclusionStatus
 * @property string|null $regionCode
 * @property string $organizationRecommendationIdentifier
 * @property string|null $affectedAccountId
 */
class ListOrganizationRecommendationResourcesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null,
     *     status?: 'ok'|'warning'|'error'|null,
     *     exclusionStatus?: 'excluded'|'included'|null,
     *     regionCode?: string|null,
     *     organizationRecommendationIdentifier: string,
     *     affectedAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
