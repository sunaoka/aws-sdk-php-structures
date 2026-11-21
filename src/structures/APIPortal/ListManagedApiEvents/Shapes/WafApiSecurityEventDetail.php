<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListManagedApiEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $label
 * @property string|null $category
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $confidence
 * @property string|null $webAclArn
 */
class WafApiSecurityEventDetail extends Shape
{
    /**
     * @param array{
     *     label?: string|null,
     *     category?: string|null,
     *     confidence?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     webAclArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
