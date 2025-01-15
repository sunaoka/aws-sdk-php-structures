<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Extensions|null $Extensions
 * @property ASN1Subject|null $Subject
 */
class ApiPassthrough extends Shape
{
    /**
     * @param array{
     *     Extensions?: Extensions|null,
     *     Subject?: ASN1Subject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
