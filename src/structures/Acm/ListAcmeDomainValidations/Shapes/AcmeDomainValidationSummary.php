<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeDomainValidations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcmeDomainValidationArn
 * @property string|null $AcmeEndpointArn
 * @property string|null $DomainName
 * @property 'DNS_PREVALIDATION'|null $PrevalidationType
 * @property PrevalidationDetails|null $PrevalidationDetails
 * @property 'VALIDATING'|'VALID'|'INVALID'|'DELETING'|null $Status
 * @property FailureDetails|null $FailureDetails
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class AcmeDomainValidationSummary extends Shape
{
    /**
     * @param array{
     *     AcmeDomainValidationArn?: string|null,
     *     AcmeEndpointArn?: string|null,
     *     DomainName?: string|null,
     *     PrevalidationType?: 'DNS_PREVALIDATION'|null,
     *     PrevalidationDetails?: PrevalidationDetails|null,
     *     Status?: 'VALIDATING'|'VALID'|'INVALID'|'DELETING'|null,
     *     FailureDetails?: FailureDetails|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
