<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportAssetFromSignedUrlJobErrorDetails|null $ImportAssetFromSignedUrlJobErrorDetails
 * @property list<AssetSourceEntry>|null $ImportAssetsFromS3JobErrorDetails
 */
class Details extends Shape
{
    /**
     * @param array{
     *     ImportAssetFromSignedUrlJobErrorDetails?: ImportAssetFromSignedUrlJobErrorDetails|null,
     *     ImportAssetsFromS3JobErrorDetails?: list<AssetSourceEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
