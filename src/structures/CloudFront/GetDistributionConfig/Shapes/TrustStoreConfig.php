<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrustStoreId
 * @property bool|null $AdvertiseTrustStoreCaNames
 * @property bool|null $IgnoreCertificateExpiry
 */
class TrustStoreConfig extends Shape
{
    /**
     * @param array{
     *     TrustStoreId: string,
     *     AdvertiseTrustStoreCaNames?: bool|null,
     *     IgnoreCertificateExpiry?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
