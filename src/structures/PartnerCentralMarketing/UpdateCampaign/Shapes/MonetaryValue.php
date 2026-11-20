<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Amount
 * @property string $CurrencyCode
 */
class MonetaryValue extends Shape
{
    /**
     * @param array{
     *     Amount: string,
     *     CurrencyCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
