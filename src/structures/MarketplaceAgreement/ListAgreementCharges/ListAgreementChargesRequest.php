<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementCharges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $catalog
 * @property string|null $agreementId
 * @property string|null $agreementType
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgreementChargesRequest extends Request
{
    /**
     * @param array{
     *     catalog?: string|null,
     *     agreementId?: string|null,
     *     agreementType?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
