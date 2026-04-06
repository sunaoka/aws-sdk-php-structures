<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenantsByCustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebAclCustomization|null $WebAcl
 * @property Certificate|null $Certificate
 * @property GeoRestrictionCustomization|null $GeoRestrictions
 */
class Customizations extends Shape
{
    /**
     * @param array{
     *     WebAcl?: WebAclCustomization|null,
     *     Certificate?: Certificate|null,
     *     GeoRestrictions?: GeoRestrictionCustomization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
