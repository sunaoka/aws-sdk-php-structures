<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|'PRIVATE' $accessType
 * @property string $endpoint
 * @property ManagedLoadBalancer|null $loadBalancer
 * @property list<ManagedSecurityGroup>|null $loadBalancerSecurityGroups
 * @property ManagedCertificate|null $certificate
 * @property ManagedListener|null $listener
 * @property ManagedListenerRule|null $rule
 * @property list<ManagedTargetGroup>|null $targetGroups
 */
class ManagedIngressPath extends Shape
{
    /**
     * @param array{
     *     accessType: 'PUBLIC'|'PRIVATE',
     *     endpoint: string,
     *     loadBalancer?: ManagedLoadBalancer|null,
     *     loadBalancerSecurityGroups?: list<ManagedSecurityGroup>|null,
     *     certificate?: ManagedCertificate|null,
     *     listener?: ManagedListener|null,
     *     rule?: ManagedListenerRule|null,
     *     targetGroups?: list<ManagedTargetGroup>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
