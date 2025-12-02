<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceShape>|null $resources
 * @property string|null $offerId
 * @property string|null $offerSetId
 */
class ProposalSummary extends Shape
{
    /**
     * @param array{
     *     resources?: list<ResourceShape>|null,
     *     offerId?: string|null,
     *     offerSetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
