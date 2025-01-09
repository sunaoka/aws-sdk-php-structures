<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportAssetFromSignedUrlJobErrorDetails $ImportAssetFromSignedUrlJobErrorDetails
 * @property list<AssetSourceEntry> $ImportAssetsFromS3JobErrorDetails
 */
class Details extends Shape
{
    /**
     * @param array{
     *     ImportAssetFromSignedUrlJobErrorDetails?: ImportAssetFromSignedUrlJobErrorDetails,
     *     ImportAssetsFromS3JobErrorDetails?: list<AssetSourceEntry>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
