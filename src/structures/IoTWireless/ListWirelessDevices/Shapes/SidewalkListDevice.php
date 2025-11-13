<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmazonId
 * @property string|null $SidewalkId
 * @property string|null $SidewalkManufacturingSn
 * @property list<CertificateList>|null $DeviceCertificates
 * @property string|null $DeviceProfileId
 * @property 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN'|null $Status
 * @property SidewalkPositioning|null $Positioning
 */
class SidewalkListDevice extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string|null,
     *     SidewalkId?: string|null,
     *     SidewalkManufacturingSn?: string|null,
     *     DeviceCertificates?: list<CertificateList>|null,
     *     DeviceProfileId?: string|null,
     *     Status?: 'PROVISIONED'|'REGISTERED'|'ACTIVATED'|'UNKNOWN'|null,
     *     Positioning?: SidewalkPositioning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
