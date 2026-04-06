<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $Enabled
 * @property 'CMAC'|'ANSI_X9_24'|null $KeyCheckValueAlgorithm
 * @property Shapes\ImportKeyMaterial $KeyMaterial
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportKeyRequest extends Request
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|null,
     *     KeyMaterial: Shapes\ImportKeyMaterial,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
