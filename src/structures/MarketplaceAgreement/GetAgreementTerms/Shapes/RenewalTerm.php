<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $id
 * @property RenewalTermConfiguration|null $configuration
 * @property string|null $lockoutPeriod
 * @property int<1, max>|null $maxRenewals
 * @property string|null $adjustmentDeadline
 * @property PriceIncrease|null $priceIncrease
 * @property list<TermTemplate>|null $termTemplates
 */
class RenewalTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     id?: string|null,
     *     configuration?: RenewalTermConfiguration|null,
     *     lockoutPeriod?: string|null,
     *     maxRenewals?: int<1, max>|null,
     *     adjustmentDeadline?: string|null,
     *     priceIncrease?: PriceIncrease|null,
     *     termTemplates?: list<TermTemplate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
