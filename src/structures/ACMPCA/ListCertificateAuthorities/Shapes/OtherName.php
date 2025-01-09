<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeId
 * @property string $Value
 */
class OtherName extends Shape
{
    /**
     * @param array{
     *     TypeId: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
