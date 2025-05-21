<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConnectionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnycastIpListId
 */
class ConnectionGroupAssociationFilter extends Shape
{
    /**
     * @param array{AnycastIpListId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
