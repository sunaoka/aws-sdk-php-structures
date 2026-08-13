<?php

namespace Sunaoka\Aws\Structures\Acm\ListCertificateDomainValidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'DNS'|'HTTP'|null $ValidationMethod
 * @property ValidationChallenge|null $ValidationChallenge
 * @property 'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null $ValidationStatus
 */
class ValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     ValidationMethod?: 'EMAIL'|'DNS'|'HTTP'|null,
     *     ValidationChallenge?: ValidationChallenge|null,
     *     ValidationStatus?: 'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
