<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationArn
 * @property string|null $OrganizationalUnitArn
 * @property string|null $UserId
 * @property 'all'|null $Group
 */
class LaunchPermission extends Shape
{
    /**
     * @param array{
     *     OrganizationArn?: string|null,
     *     OrganizationalUnitArn?: string|null,
     *     UserId?: string|null,
     *     Group?: 'all'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
