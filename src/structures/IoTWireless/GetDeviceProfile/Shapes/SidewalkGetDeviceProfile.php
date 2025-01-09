<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDeviceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationServerPublicKey
 * @property bool $QualificationStatus
 * @property list<DakCertificateMetadata> $DakCertificateMetadata
 */
class SidewalkGetDeviceProfile extends Shape
{
    /**
     * @param array{
     *     ApplicationServerPublicKey?: string,
     *     QualificationStatus?: bool,
     *     DakCertificateMetadata?: list<DakCertificateMetadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
