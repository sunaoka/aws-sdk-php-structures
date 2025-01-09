<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListResourceSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComponentId
 * @property DNSTargetResource $DnsTargetResource
 * @property list<string> $ReadinessScopes
 * @property string $ResourceArn
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string,
     *     DnsTargetResource?: DNSTargetResource,
     *     ReadinessScopes?: list<string>,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
