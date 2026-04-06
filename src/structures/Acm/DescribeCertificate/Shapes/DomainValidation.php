<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property list<string>|null $ValidationEmails
 * @property string|null $ValidationDomain
 * @property 'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null $ValidationStatus
 * @property ResourceRecord|null $ResourceRecord
 * @property 'EMAIL'|'DNS'|null $ValidationMethod
 */
class DomainValidation extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     ValidationEmails?: list<string>|null,
     *     ValidationDomain?: string|null,
     *     ValidationStatus?: 'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null,
     *     ResourceRecord?: ResourceRecord|null,
     *     ValidationMethod?: 'EMAIL'|'DNS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
