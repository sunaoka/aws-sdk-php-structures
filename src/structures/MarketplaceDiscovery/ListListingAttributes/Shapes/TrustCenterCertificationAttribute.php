<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificationType
 * @property string $displayName
 * @property string $logoUrl
 */
class TrustCenterCertificationAttribute extends Shape
{
    /**
     * @param array{
     *     certificationType: string,
     *     displayName: string,
     *     logoUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
