<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PolicyInformation> $CertificatePolicies
 * @property list<ExtendedKeyUsage> $ExtendedKeyUsage
 * @property KeyUsage $KeyUsage
 * @property list<GeneralName> $SubjectAlternativeNames
 * @property list<CustomExtension> $CustomExtensions
 */
class Extensions extends Shape
{
    /**
     * @param array{
     *     CertificatePolicies?: list<PolicyInformation>,
     *     ExtendedKeyUsage?: list<ExtendedKeyUsage>,
     *     KeyUsage?: KeyUsage,
     *     SubjectAlternativeNames?: list<GeneralName>,
     *     CustomExtensions?: list<CustomExtension>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
