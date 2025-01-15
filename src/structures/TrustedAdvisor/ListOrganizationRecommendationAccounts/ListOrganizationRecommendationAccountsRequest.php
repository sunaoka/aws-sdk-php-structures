<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $affectedAccountId
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 * @property string $organizationRecommendationIdentifier
 */
class ListOrganizationRecommendationAccountsRequest extends Request
{
    /**
     * @param array{
     *     affectedAccountId?: string|null,
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null,
     *     organizationRecommendationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
