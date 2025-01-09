<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyUsage $KeyUsage
 * @property list<AccessDescription> $SubjectInformationAccess
 */
class CsrExtensions extends Shape
{
    /**
     * @param array{
     *     KeyUsage?: KeyUsage,
     *     SubjectInformationAccess?: list<AccessDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
