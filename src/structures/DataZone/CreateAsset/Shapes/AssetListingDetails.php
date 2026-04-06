<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $listingId
 * @property 'CREATING'|'ACTIVE'|'INACTIVE' $listingStatus
 */
class AssetListingDetails extends Shape
{
    /**
     * @param array{
     *     listingId: string,
     *     listingStatus: 'CREATING'|'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
