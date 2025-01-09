<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $offerId
 * @property list<Resource> $resources
 */
class ProposalSummary extends Shape
{
    /**
     * @param array{
     *     offerId?: string,
     *     resources?: list<Resource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
