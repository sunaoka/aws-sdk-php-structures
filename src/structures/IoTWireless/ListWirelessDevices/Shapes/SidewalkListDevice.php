<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmazonId
 * @property string $SidewalkId
 * @property string $SidewalkManufacturingSn
 * @property list<CertificateList> $DeviceCertificates
 * @property string $DeviceProfileId
 * @property 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN' $Status
 */
class SidewalkListDevice extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string,
     *     SidewalkId?: string,
     *     SidewalkManufacturingSn?: string,
     *     DeviceCertificates?: list<CertificateList>,
     *     DeviceProfileId?: string,
     *     Status?: 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
