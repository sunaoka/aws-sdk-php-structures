<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListDomainVerifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $domainName
 * @property 'VERIFIED'|'PENDING'|'VERIFICATION_TIMED_OUT' $status
 * @property TxtMethodConfig|null $txtMethodConfig
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastVerifiedTime
 * @property array<string, string>|null $tags
 */
class DomainVerificationSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     domainName: string,
     *     status: 'VERIFIED'|'PENDING'|'VERIFICATION_TIMED_OUT',
     *     txtMethodConfig?: TxtMethodConfig|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastVerifiedTime?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
