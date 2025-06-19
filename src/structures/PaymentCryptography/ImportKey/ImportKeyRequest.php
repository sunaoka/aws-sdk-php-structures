<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ImportKeyMaterial $KeyMaterial
 * @property 'CMAC'|'ANSI_X9_24'|'HMAC'|null $KeyCheckValueAlgorithm
 * @property bool|null $Enabled
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyMaterial: Shapes\ImportKeyMaterial,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|'HMAC'|null,
     *     Enabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
