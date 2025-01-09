<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ResourceArns
 * @property list<string> $ProtectionNames
 * @property list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'> $ResourceTypes
 */
class InclusionProtectionFilters extends Shape
{
    /**
     * @param array{
     *     ResourceArns?: list<string>,
     *     ProtectionNames?: list<string>,
     *     ResourceTypes?: list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
