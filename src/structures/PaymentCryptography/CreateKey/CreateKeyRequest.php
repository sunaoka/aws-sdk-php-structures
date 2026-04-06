<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $Enabled
 * @property bool $Exportable
 * @property Shapes\KeyAttributes $KeyAttributes
 * @property 'CMAC'|'ANSI_X9_24'|null $KeyCheckValueAlgorithm
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Exportable: bool,
     *     KeyAttributes: Shapes\KeyAttributes,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
