<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginRequestPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'managed'|'custom' $Type
 * @property OriginRequestPolicy $OriginRequestPolicy
 */
class OriginRequestPolicySummary extends Shape
{
    /**
     * @param array{
     *     Type: 'managed'|'custom',
     *     OriginRequestPolicy: OriginRequestPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
