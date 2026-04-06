<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DataEncipherment
 * @property bool|null $DigitalSignature
 * @property bool|null $KeyAgreement
 * @property bool|null $KeyEncipherment
 * @property bool|null $NonRepudiation
 */
class KeyUsageFlags extends Shape
{
    /**
     * @param array{
     *     DataEncipherment?: bool|null,
     *     DigitalSignature?: bool|null,
     *     KeyAgreement?: bool|null,
     *     KeyEncipherment?: bool|null,
     *     NonRepudiation?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
