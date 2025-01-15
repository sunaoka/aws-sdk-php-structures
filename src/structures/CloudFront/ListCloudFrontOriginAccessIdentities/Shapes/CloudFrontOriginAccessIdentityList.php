<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListCloudFrontOriginAccessIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Marker
 * @property string|null $NextMarker
 * @property int $MaxItems
 * @property bool $IsTruncated
 * @property int $Quantity
 * @property list<CloudFrontOriginAccessIdentitySummary>|null $Items
 */
class CloudFrontOriginAccessIdentityList extends Shape
{
    /**
     * @param array{
     *     Marker: string,
     *     NextMarker?: string|null,
     *     MaxItems: int,
     *     IsTruncated: bool,
     *     Quantity: int,
     *     Items?: list<CloudFrontOriginAccessIdentitySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
