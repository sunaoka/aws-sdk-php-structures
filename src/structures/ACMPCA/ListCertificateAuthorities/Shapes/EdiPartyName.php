<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PartyName
 * @property string $NameAssigner
 */
class EdiPartyName extends Shape
{
    /**
     * @param array{
     *     PartyName: string,
     *     NameAssigner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
