<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyAttributes $KeyAttributes
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 * @property bool $Exportable
 * @property bool $Enabled
 * @property list<Shapes\Tag> $Tags
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyAttributes: Shapes\KeyAttributes,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24',
     *     Exportable: bool,
     *     Enabled?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
