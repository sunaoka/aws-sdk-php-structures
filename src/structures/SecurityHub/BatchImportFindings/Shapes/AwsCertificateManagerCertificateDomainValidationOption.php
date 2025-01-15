<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property AwsCertificateManagerCertificateResourceRecord|null $ResourceRecord
 * @property string|null $ValidationDomain
 * @property list<string>|null $ValidationEmails
 * @property string|null $ValidationMethod
 * @property string|null $ValidationStatus
 */
class AwsCertificateManagerCertificateDomainValidationOption extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     ResourceRecord?: AwsCertificateManagerCertificateResourceRecord|null,
     *     ValidationDomain?: string|null,
     *     ValidationEmails?: list<string>|null,
     *     ValidationMethod?: string|null,
     *     ValidationStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
