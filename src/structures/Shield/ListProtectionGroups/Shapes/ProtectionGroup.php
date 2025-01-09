<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtectionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProtectionGroupId
 * @property 'SUM'|'MEAN'|'MAX' $Aggregation
 * @property 'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE' $Pattern
 * @property 'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR' $ResourceType
 * @property list<string> $Members
 * @property string $ProtectionGroupArn
 */
class ProtectionGroup extends Shape
{
    /**
     * @param array{
     *     ProtectionGroupId: string,
     *     Aggregation: 'SUM'|'MEAN'|'MAX',
     *     Pattern: 'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE',
     *     ResourceType?: 'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR',
     *     Members: list<string>,
     *     ProtectionGroupArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
