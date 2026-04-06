<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $offerId
 * @property list<ResourceShape>|null $resources
 */
class ProposalSummary extends Shape
{
    /**
     * @param array{
     *     offerId?: string|null,
     *     resources?: list<ResourceShape>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
