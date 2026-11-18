<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementRequestId
 * @property int<10, 50>|null $maxResults
 * @property string|null $nextToken
 */
class GetAgreementRequestTermsRequest extends Request
{
    /**
     * @param array{
     *     agreementRequestId: string,
     *     maxResults?: int<10, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
