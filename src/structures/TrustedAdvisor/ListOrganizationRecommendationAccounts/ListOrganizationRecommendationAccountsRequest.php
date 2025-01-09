<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $affectedAccountId
 * @property int $maxResults
 * @property string $nextToken
 * @property string $organizationRecommendationIdentifier
 */
class ListOrganizationRecommendationAccountsRequest extends Request
{
    /**
     * @param array{
     *     affectedAccountId?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     organizationRecommendationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
