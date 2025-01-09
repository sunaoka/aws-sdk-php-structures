<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property list<string> $ValidationEmails
 * @property string $ValidationDomain
 * @property 'PENDING_VALIDATION'|'SUCCESS'|'FAILED' $ValidationStatus
 * @property ResourceRecord $ResourceRecord
 * @property 'EMAIL'|'DNS' $ValidationMethod
 */
class DomainValidation extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     ValidationEmails?: list<string>,
     *     ValidationDomain?: string,
     *     ValidationStatus?: 'PENDING_VALIDATION'|'SUCCESS'|'FAILED',
     *     ResourceRecord?: ResourceRecord,
     *     ValidationMethod?: 'EMAIL'|'DNS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
