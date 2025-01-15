<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertPolicyId
 * @property list<PolicyQualifierInfo>|null $PolicyQualifiers
 */
class PolicyInformation extends Shape
{
    /**
     * @param array{
     *     CertPolicyId: string,
     *     PolicyQualifiers?: list<PolicyQualifierInfo>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
