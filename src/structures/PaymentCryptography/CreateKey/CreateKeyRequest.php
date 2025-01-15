<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyAttributes $KeyAttributes
 * @property 'CMAC'|'ANSI_X9_24'|null $KeyCheckValueAlgorithm
 * @property bool $Exportable
 * @property bool|null $Enabled
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyAttributes: Shapes\KeyAttributes,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|null,
     *     Exportable: bool,
     *     Enabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
