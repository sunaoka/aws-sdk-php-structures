<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResoldBusiness|null $resoldBusiness
 * @property ResoldEnterprise|null $resoldEnterprise
 * @property PartnerLedSupport|null $partnerLedSupport
 */
class SupportPlan extends Shape
{
    /**
     * @param array{
     *     resoldBusiness?: ResoldBusiness|null,
     *     resoldEnterprise?: ResoldEnterprise|null,
     *     partnerLedSupport?: PartnerLedSupport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
