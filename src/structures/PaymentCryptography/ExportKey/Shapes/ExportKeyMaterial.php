<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportTr31KeyBlock|null $Tr31KeyBlock
 * @property ExportTr34KeyBlock|null $Tr34KeyBlock
 * @property ExportKeyCryptogram|null $KeyCryptogram
 * @property ExportDiffieHellmanTr31KeyBlock|null $DiffieHellmanTr31KeyBlock
 * @property ExportAs2805KeyCryptogram|null $As2805KeyCryptogram
 */
class ExportKeyMaterial extends Shape
{
    /**
     * @param array{
     *     Tr31KeyBlock?: ExportTr31KeyBlock|null,
     *     Tr34KeyBlock?: ExportTr34KeyBlock|null,
     *     KeyCryptogram?: ExportKeyCryptogram|null,
     *     DiffieHellmanTr31KeyBlock?: ExportDiffieHellmanTr31KeyBlock|null,
     *     As2805KeyCryptogram?: ExportAs2805KeyCryptogram|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
