<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtectionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ProtectionGroupIds
 * @property list<'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE'> $Patterns
 * @property list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'> $ResourceTypes
 * @property list<'SUM'|'MEAN'|'MAX'> $Aggregations
 */
class InclusionProtectionGroupFilters extends Shape
{
    /**
     * @param array{
     *     ProtectionGroupIds?: list<string>,
     *     Patterns?: list<'ALL'|'ARBITRARY'|'BY_RESOURCE_TYPE'>,
     *     ResourceTypes?: list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'>,
     *     Aggregations?: list<'SUM'|'MEAN'|'MAX'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
