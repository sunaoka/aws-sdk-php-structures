<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ALL'|'PUBLIC'|null $offerType
 */
class ListFoundationModelAgreementOffersRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     offerType?: 'ALL'|'PUBLIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
