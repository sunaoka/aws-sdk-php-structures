<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateId
 * @property int $MaxAllowedSignature
 * @property bool $FactorySupport
 * @property string $ApId
 * @property string $DeviceTypeId
 */
class DakCertificateMetadata extends Shape
{
    /**
     * @param array{
     *     CertificateId: string,
     *     MaxAllowedSignature?: int,
     *     FactorySupport?: bool,
     *     ApId?: string,
     *     DeviceTypeId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
