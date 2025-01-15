<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationalUnitId
 */
class ResourceDataSyncOrganizationalUnit extends Shape
{
    /**
     * @param array{OrganizationalUnitId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
