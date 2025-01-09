<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Decrypt
 * @property bool $KeyAgreement
 * @property bool $Sign
 */
class KeyUsagePropertyFlags extends Shape
{
    /**
     * @param array{
     *     Decrypt?: bool,
     *     KeyAgreement?: bool,
     *     Sign?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
