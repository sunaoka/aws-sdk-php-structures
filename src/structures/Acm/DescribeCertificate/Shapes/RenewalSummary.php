<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED' $RenewalStatus
 * @property list<DomainValidation> $DomainValidationOptions
 * @property 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'DOMAIN_VALIDATION_DENIED'|'CAA_ERROR'|'PCA_LIMIT_EXCEEDED'|'PCA_INVALID_ARN'|'PCA_INVALID_STATE'|'PCA_REQUEST_FAILED'|'PCA_NAME_CONSTRAINTS_VALIDATION'|'PCA_RESOURCE_NOT_FOUND'|'PCA_INVALID_ARGS'|'PCA_INVALID_DURATION'|'PCA_ACCESS_DENIED'|'SLR_NOT_FOUND'|'OTHER' $RenewalStatusReason
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class RenewalSummary extends Shape
{
    /**
     * @param array{
     *     RenewalStatus: 'PENDING_AUTO_RENEWAL'|'PENDING_VALIDATION'|'SUCCESS'|'FAILED',
     *     DomainValidationOptions: list<DomainValidation>,
     *     RenewalStatusReason?: 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'DOMAIN_VALIDATION_DENIED'|'CAA_ERROR'|'PCA_LIMIT_EXCEEDED'|'PCA_INVALID_ARN'|'PCA_INVALID_STATE'|'PCA_REQUEST_FAILED'|'PCA_NAME_CONSTRAINTS_VALIDATION'|'PCA_RESOURCE_NOT_FOUND'|'PCA_INVALID_ARGS'|'PCA_INVALID_DURATION'|'PCA_ACCESS_DENIED'|'SLR_NOT_FOUND'|'OTHER',
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
