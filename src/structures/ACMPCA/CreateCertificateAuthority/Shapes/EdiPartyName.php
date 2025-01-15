<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PartyName
 * @property string|null $NameAssigner
 */
class EdiPartyName extends Shape
{
    /**
     * @param array{
     *     PartyName: string,
     *     NameAssigner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
