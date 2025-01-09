<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ImportKeyMaterial $KeyMaterial
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 * @property bool $Enabled
 * @property list<Shapes\Tag> $Tags
 */
class ImportKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyMaterial: Shapes\ImportKeyMaterial,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24',
     *     Enabled?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
