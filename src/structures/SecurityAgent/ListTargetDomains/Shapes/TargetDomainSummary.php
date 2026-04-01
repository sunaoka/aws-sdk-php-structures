<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListTargetDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetDomainId
 * @property string $domainName
 * @property 'PENDING'|'VERIFIED'|'FAILED'|'UNREACHABLE'|null $verificationStatus
 */
class TargetDomainSummary extends Shape
{
    /**
     * @param array{
     *     targetDomainId: string,
     *     domainName: string,
     *     verificationStatus?: 'PENDING'|'VERIFIED'|'FAILED'|'UNREACHABLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
