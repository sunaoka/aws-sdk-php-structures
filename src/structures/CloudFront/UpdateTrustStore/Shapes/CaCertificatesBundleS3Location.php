<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $Region
 * @property string|null $Version
 */
class CaCertificatesBundleS3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     Region: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
