<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ResourceArns
 * @property list<string>|null $ProtectionNames
 * @property list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'>|null $ResourceTypes
 */
class InclusionProtectionFilters extends Shape
{
    /**
     * @param array{
     *     ResourceArns?: list<string>|null,
     *     ProtectionNames?: list<string>|null,
     *     ResourceTypes?: list<'CLOUDFRONT_DISTRIBUTION'|'ROUTE_53_HOSTED_ZONE'|'ELASTIC_IP_ALLOCATION'|'CLASSIC_LOAD_BALANCER'|'APPLICATION_LOAD_BALANCER'|'GLOBAL_ACCELERATOR'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
