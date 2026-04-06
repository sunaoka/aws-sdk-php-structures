<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 * @property string $organizationRecommendationIdentifier
 * @property string|null $affectedAccountId
 */
class ListOrganizationRecommendationAccountsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null,
     *     organizationRecommendationIdentifier: string,
     *     affectedAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
