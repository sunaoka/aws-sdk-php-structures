<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResoldEnterprise|null $resoldEnterprise
 * @property PartnerLedSupport|null $partnerLedSupport
 * @property ResoldUnifiedOperations|null $resoldUnifiedOperations
 */
class SupportPlan extends Shape
{
    /**
     * @param array{
     *     resoldEnterprise?: ResoldEnterprise|null,
     *     partnerLedSupport?: PartnerLedSupport|null,
     *     resoldUnifiedOperations?: ResoldUnifiedOperations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
