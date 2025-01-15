<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationServerPublicKey
 * @property bool|null $QualificationStatus
 * @property list<DakCertificateMetadata>|null $DakCertificateMetadata
 */
class SidewalkGetDeviceProfile extends Shape
{
    /**
     * @param array{
     *     ApplicationServerPublicKey?: string|null,
     *     QualificationStatus?: bool|null,
     *     DakCertificateMetadata?: list<DakCertificateMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
