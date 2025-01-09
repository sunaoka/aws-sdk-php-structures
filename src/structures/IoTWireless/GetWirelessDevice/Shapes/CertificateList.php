<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Ed25519'|'P256r1' $SigningAlg
 * @property string $Value
 */
class CertificateList extends Shape
{
    /**
     * @param array{
     *     SigningAlg: 'Ed25519'|'P256r1',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
