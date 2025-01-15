<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PolicyInformation>|null $CertificatePolicies
 * @property list<ExtendedKeyUsage>|null $ExtendedKeyUsage
 * @property KeyUsage|null $KeyUsage
 * @property list<GeneralName>|null $SubjectAlternativeNames
 * @property list<CustomExtension>|null $CustomExtensions
 */
class Extensions extends Shape
{
    /**
     * @param array{
     *     CertificatePolicies?: list<PolicyInformation>|null,
     *     ExtendedKeyUsage?: list<ExtendedKeyUsage>|null,
     *     KeyUsage?: KeyUsage|null,
     *     SubjectAlternativeNames?: list<GeneralName>|null,
     *     CustomExtensions?: list<CustomExtension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
