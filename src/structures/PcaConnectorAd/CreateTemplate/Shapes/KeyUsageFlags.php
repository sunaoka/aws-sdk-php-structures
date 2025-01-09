<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DataEncipherment
 * @property bool $DigitalSignature
 * @property bool $KeyAgreement
 * @property bool $KeyEncipherment
 * @property bool $NonRepudiation
 */
class KeyUsageFlags extends Shape
{
    /**
     * @param array{
     *     DataEncipherment?: bool,
     *     DigitalSignature?: bool,
     *     KeyAgreement?: bool,
     *     KeyEncipherment?: bool,
     *     NonRepudiation?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
