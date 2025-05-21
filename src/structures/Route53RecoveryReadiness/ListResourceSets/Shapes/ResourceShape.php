<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListResourceSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComponentId
 * @property DNSTargetResource|null $DnsTargetResource
 * @property list<string>|null $ReadinessScopes
 * @property string|null $ResourceArn
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string|null,
     *     DnsTargetResource?: DNSTargetResource|null,
     *     ReadinessScopes?: list<string>|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
