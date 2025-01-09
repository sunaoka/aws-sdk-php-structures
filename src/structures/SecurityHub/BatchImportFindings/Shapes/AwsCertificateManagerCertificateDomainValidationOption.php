<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property AwsCertificateManagerCertificateResourceRecord $ResourceRecord
 * @property string $ValidationDomain
 * @property list<string> $ValidationEmails
 * @property string $ValidationMethod
 * @property string $ValidationStatus
 */
class AwsCertificateManagerCertificateDomainValidationOption extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     ResourceRecord?: AwsCertificateManagerCertificateResourceRecord,
     *     ValidationDomain?: string,
     *     ValidationEmails?: list<string>,
     *     ValidationMethod?: string,
     *     ValidationStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
