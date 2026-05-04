<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetTargetDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetDomainId
 * @property string $domainName
 * @property 'PENDING'|'VERIFIED'|'FAILED'|'UNREACHABLE'|null $verificationStatus
 * @property string|null $verificationStatusReason
 * @property VerificationDetails|null $verificationDetails
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $verifiedAt
 */
class TargetDomain extends Shape
{
    /**
     * @param array{
     *     targetDomainId: string,
     *     domainName: string,
     *     verificationStatus?: 'PENDING'|'VERIFIED'|'FAILED'|'UNREACHABLE'|null,
     *     verificationStatusReason?: string|null,
     *     verificationDetails?: VerificationDetails|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     verifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
