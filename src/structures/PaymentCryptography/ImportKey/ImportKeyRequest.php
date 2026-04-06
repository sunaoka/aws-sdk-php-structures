<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ImportKeyMaterial $KeyMaterial
 * @property 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null $KeyCheckValueAlgorithm
 * @property bool|null $Enabled
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $ReplicationRegions
 */
class ImportKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyMaterial: Shapes\ImportKeyMaterial,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null,
     *     Enabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ReplicationRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
