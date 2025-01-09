<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessMethod $AccessMethod
 * @property GeneralName $AccessLocation
 */
class AccessDescription extends Shape
{
    /**
     * @param array{
     *     AccessMethod: AccessMethod,
     *     AccessLocation: GeneralName
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
