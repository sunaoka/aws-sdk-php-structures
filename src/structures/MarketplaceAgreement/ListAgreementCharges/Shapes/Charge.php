<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property int<1, max>|null $revision
 * @property string|null $agreementId
 * @property string|null $agreementType
 * @property string|null $purchaseOrderReference
 * @property string|null $currencyCode
 * @property string|null $amount
 * @property \Aws\Api\DateTimeResult|null $time
 */
class Charge extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     revision?: int<1, max>|null,
     *     agreementId?: string|null,
     *     agreementType?: string|null,
     *     purchaseOrderReference?: string|null,
     *     currencyCode?: string|null,
     *     amount?: string|null,
     *     time?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
