<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListAssetsForLicenseAssetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssetArn
 * @property \Aws\Api\DateTimeResult|null $LatestAssetDiscoveryTime
 */
class Asset extends Shape
{
    /**
     * @param array{
     *     AssetArn?: string|null,
     *     LatestAssetDiscoveryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
