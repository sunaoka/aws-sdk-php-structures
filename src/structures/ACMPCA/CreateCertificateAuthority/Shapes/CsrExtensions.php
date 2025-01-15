<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyUsage|null $KeyUsage
 * @property list<AccessDescription>|null $SubjectInformationAccess
 */
class CsrExtensions extends Shape
{
    /**
     * @param array{
     *     KeyUsage?: KeyUsage|null,
     *     SubjectInformationAccess?: list<AccessDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
