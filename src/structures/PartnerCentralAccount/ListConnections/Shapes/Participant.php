<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PartnerProfileSummary|null $PartnerProfile
 * @property SellerProfileSummary|null $SellerProfile
 * @property AccountSummary|null $Account
 */
class Participant extends Shape
{
    /**
     * @param array{
     *     PartnerProfile?: PartnerProfileSummary|null,
     *     SellerProfile?: SellerProfileSummary|null,
     *     Account?: AccountSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
