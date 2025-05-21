<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionTenantByDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'override'|'disable' $Action
 * @property string|null $Arn
 */
class WebAclCustomization extends Shape
{
    /**
     * @param array{
     *     Action: 'override'|'disable',
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
