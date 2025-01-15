<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmazonId
 * @property string|null $SidewalkId
 * @property string|null $SidewalkManufacturingSn
 * @property list<CertificateList>|null $DeviceCertificates
 * @property list<CertificateList>|null $PrivateKeys
 * @property string|null $DeviceProfileId
 * @property string|null $CertificateId
 * @property 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN'|null $Status
 */
class SidewalkDevice extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string|null,
     *     SidewalkId?: string|null,
     *     SidewalkManufacturingSn?: string|null,
     *     DeviceCertificates?: list<CertificateList>|null,
     *     PrivateKeys?: list<CertificateList>|null,
     *     DeviceProfileId?: string|null,
     *     CertificateId?: string|null,
     *     Status?: 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
