<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $affectedAccountId
 * @property 'excluded'|'included'|null $exclusionStatus
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 * @property string $organizationRecommendationIdentifier
 * @property string|null $regionCode
 * @property 'ok'|'warning'|'error'|null $status
 */
class ListOrganizationRecommendationResourcesRequest extends Request
{
    /**
     * @param array{
     *     affectedAccountId?: string|null,
     *     exclusionStatus?: 'excluded'|'included'|null,
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null,
     *     organizationRecommendationIdentifier: string,
     *     regionCode?: string|null,
     *     status?: 'ok'|'warning'|'error'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
