<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ouId
 * @property string|null $name
 */
class OrganizationalUnitReference extends Shape
{
    /**
     * @param array{
     *     ouId: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
