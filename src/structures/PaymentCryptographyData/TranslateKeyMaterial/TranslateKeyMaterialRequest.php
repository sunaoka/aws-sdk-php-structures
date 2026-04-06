<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslateKeyMaterial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IncomingKeyMaterial $IncomingKeyMaterial
 * @property Shapes\OutgoingKeyMaterial $OutgoingKeyMaterial
 * @property 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null $KeyCheckValueAlgorithm
 */
class TranslateKeyMaterialRequest extends Request
{
    /**
     * @param array{
     *     IncomingKeyMaterial: Shapes\IncomingKeyMaterial,
     *     OutgoingKeyMaterial: Shapes\OutgoingKeyMaterial,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
