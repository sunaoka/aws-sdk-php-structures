<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Decrypt
 * @property bool|null $KeyAgreement
 * @property bool|null $Sign
 */
class KeyUsagePropertyFlags extends Shape
{
    /**
     * @param array{
     *     Decrypt?: bool|null,
     *     KeyAgreement?: bool|null,
     *     Sign?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
