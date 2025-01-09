<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class GetAgreementTermsRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
