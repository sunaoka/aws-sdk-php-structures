<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterCsr
 * @property string $HsmCertificate
 * @property string $AwsHardwareCertificate
 * @property string $ManufacturerHardwareCertificate
 * @property string $ClusterCertificate
 */
class Certificates extends Shape
{
    /**
     * @param array{
     *     ClusterCsr?: string,
     *     HsmCertificate?: string,
     *     AwsHardwareCertificate?: string,
     *     ManufacturerHardwareCertificate?: string,
     *     ClusterCertificate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
