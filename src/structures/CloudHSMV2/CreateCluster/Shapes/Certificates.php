<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterCsr
 * @property string|null $HsmCertificate
 * @property string|null $AwsHardwareCertificate
 * @property string|null $ManufacturerHardwareCertificate
 * @property string|null $ClusterCertificate
 */
class Certificates extends Shape
{
    /**
     * @param array{
     *     ClusterCsr?: string|null,
     *     HsmCertificate?: string|null,
     *     AwsHardwareCertificate?: string|null,
     *     ManufacturerHardwareCertificate?: string|null,
     *     ClusterCertificate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
