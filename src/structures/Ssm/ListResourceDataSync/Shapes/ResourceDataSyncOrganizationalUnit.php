<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationalUnitId
 */
class ResourceDataSyncOrganizationalUnit extends Shape
{
    /**
     * @param array{OrganizationalUnitId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
