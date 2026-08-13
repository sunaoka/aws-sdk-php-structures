<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_DOMAIN_VALIDATION'|'SUCCESS'|'FAILED'|null $Status
 * @property 'DOMAIN_VALIDATION_METHOD'|null $Type
 * @property DomainValidationMethodUpdateSummary|null $DomainValidationMethodUpdateSummary
 * @property \Aws\Api\DateTimeResult|null $RequestedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class UpdateSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING_DOMAIN_VALIDATION'|'SUCCESS'|'FAILED'|null,
     *     Type?: 'DOMAIN_VALIDATION_METHOD'|null,
     *     DomainValidationMethodUpdateSummary?: DomainValidationMethodUpdateSummary|null,
     *     RequestedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
