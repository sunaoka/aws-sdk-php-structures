<?php

namespace Sunaoka\Aws\Structures\RAM\CreateResourceShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $retainSharingOnAccountLeaveOrganization
 */
class ResourceShareConfiguration extends Shape
{
    /**
     * @param array{retainSharingOnAccountLeaveOrganization?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
