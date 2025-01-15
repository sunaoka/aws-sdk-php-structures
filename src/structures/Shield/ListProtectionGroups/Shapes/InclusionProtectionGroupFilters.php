<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtectionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ProtectionGroupIds
 * @property list<'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE'>|null $Patterns
 * @property list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'>|null $ResourceTypes
 * @property list<'SUM'|'MEAN'|'MAX'>|null $Aggregations
 */
class InclusionProtectionGroupFilters extends Shape
{
    /**
     * @param array{
     *     ProtectionGroupIds?: list<string>|null,
     *     Patterns?: list<'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE'>|null,
     *     ResourceTypes?: list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'>|null,
     *     Aggregations?: list<'SUM'|'MEAN'|'MAX'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
