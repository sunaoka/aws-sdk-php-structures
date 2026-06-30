<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeDomainValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED'|'DOMAIN_MISMATCH'|'DOMAIN_NOT_ALLOWED'|'ENDPOINT_NOT_ACTIVE'|'HOSTED_ZONE_NOT_FOUND'|'INTERNAL_FAILURE'|'INVALID_CHANGE_BATCH'|'INVALID_PUBLIC_DOMAIN'|'TIMED_OUT'|null $Reason
 * @property string|null $Message
 */
class FailureDetails extends Shape
{
    /**
     * @param array{
     *     Reason?: 'ACCESS_DENIED'|'DOMAIN_MISMATCH'|'DOMAIN_NOT_ALLOWED'|'ENDPOINT_NOT_ACTIVE'|'HOSTED_ZONE_NOT_FOUND'|'INTERNAL_FAILURE'|'INVALID_CHANGE_BATCH'|'INVALID_PUBLIC_DOMAIN'|'TIMED_OUT'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
