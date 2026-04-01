<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementInvoiceLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $legalName
 * @property string|null $branchName
 */
class InvoicingEntity extends Shape
{
    /**
     * @param array{
     *     legalName?: string|null,
     *     branchName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
