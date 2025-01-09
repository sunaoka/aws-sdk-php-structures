<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportTr31KeyBlock $Tr31KeyBlock
 * @property ExportTr34KeyBlock $Tr34KeyBlock
 * @property ExportKeyCryptogram $KeyCryptogram
 */
class ExportKeyMaterial extends Shape
{
    /**
     * @param array{
     *     Tr31KeyBlock?: ExportTr31KeyBlock,
     *     Tr34KeyBlock?: ExportTr34KeyBlock,
     *     KeyCryptogram?: ExportKeyCryptogram
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
