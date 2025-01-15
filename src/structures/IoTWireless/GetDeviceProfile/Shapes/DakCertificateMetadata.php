<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateId
 * @property int|null $MaxAllowedSignature
 * @property bool|null $FactorySupport
 * @property string|null $ApId
 * @property string|null $DeviceTypeId
 */
class DakCertificateMetadata extends Shape
{
    /**
     * @param array{
     *     CertificateId: string,
     *     MaxAllowedSignature?: int|null,
     *     FactorySupport?: bool|null,
     *     ApId?: string|null,
     *     DeviceTypeId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
