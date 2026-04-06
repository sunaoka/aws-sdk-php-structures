<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $offerId
 * @property string $offerToken
 * @property TermDetails $termDetails
 */
class Offer extends Shape
{
    /**
     * @param array{
     *     offerId?: string|null,
     *     offerToken: string,
     *     termDetails: TermDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
