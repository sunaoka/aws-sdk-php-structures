<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Extensions $Extensions
 * @property ASN1Subject $Subject
 */
class ApiPassthrough extends Shape
{
    /**
     * @param array{
     *     Extensions?: Extensions,
     *     Subject?: ASN1Subject
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
