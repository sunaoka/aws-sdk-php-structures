<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'CLOUDFRONT', RequestBodyAssociatedResourceTypeConfig>|null $RequestBody
 */
class AssociationConfig extends Shape
{
    /**
     * @param array{RequestBody?: array<'CLOUDFRONT', RequestBodyAssociatedResourceTypeConfig>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
