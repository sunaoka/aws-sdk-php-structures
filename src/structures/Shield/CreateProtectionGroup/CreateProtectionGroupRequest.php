<?php

namespace Sunaoka\Aws\Structures\Shield\CreateProtectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionGroupId
 * @property 'SUM'|'MEAN'|'MAX' $Aggregation
 * @property 'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE' $Pattern
 * @property 'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'|null $ResourceType
 * @property list<string>|null $Members
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProtectionGroupRequest extends Request
{
    /**
     * @param array{
     *     ProtectionGroupId: string,
     *     Aggregation: 'SUM'|'MEAN'|'MAX',
     *     Pattern: 'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE',
     *     ResourceType?: 'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'|null,
     *     Members?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
