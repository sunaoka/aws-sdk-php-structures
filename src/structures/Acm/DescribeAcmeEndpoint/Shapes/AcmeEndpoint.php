<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcmeEndpointArn
 * @property string|null $EndpointUrl
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property string|null $FailureReason
 * @property 'PRE_APPROVED'|null $AuthorizationBehavior
 * @property 'REQUIRED'|'NOT_REQUIRED'|null $Contact
 * @property CertificateAuthority|null $CertificateAuthority
 * @property list<Tag>|null $CertificateTags
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class AcmeEndpoint extends Shape
{
    /**
     * @param array{
     *     AcmeEndpointArn?: string|null,
     *     EndpointUrl?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     FailureReason?: string|null,
     *     AuthorizationBehavior?: 'PRE_APPROVED'|null,
     *     Contact?: 'REQUIRED'|'NOT_REQUIRED'|null,
     *     CertificateAuthority?: CertificateAuthority|null,
     *     CertificateTags?: list<Tag>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
