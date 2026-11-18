<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementRequestId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class GetAgreementRequestApprovalPlansRequest extends Request
{
    /**
     * @param array{
     *     agreementRequestId: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
