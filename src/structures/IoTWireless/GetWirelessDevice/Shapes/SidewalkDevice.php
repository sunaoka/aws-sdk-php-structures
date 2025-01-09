<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmazonId
 * @property string $SidewalkId
 * @property string $SidewalkManufacturingSn
 * @property list<CertificateList> $DeviceCertificates
 * @property list<CertificateList> $PrivateKeys
 * @property string $DeviceProfileId
 * @property string $CertificateId
 * @property 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN' $Status
 */
class SidewalkDevice extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string,
     *     SidewalkId?: string,
     *     SidewalkManufacturingSn?: string,
     *     DeviceCertificates?: list<CertificateList>,
     *     PrivateKeys?: list<CertificateList>,
     *     DeviceProfileId?: string,
     *     CertificateId?: string,
     *     Status?: 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
