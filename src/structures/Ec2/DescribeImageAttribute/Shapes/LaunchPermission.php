<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'all'|null $Group
 * @property string|null $UserId
 * @property string|null $OrganizationArn
 * @property string|null $OrganizationalUnitArn
 */
class LaunchPermission extends Shape
{
    /**
     * @param array{
     *     Group?: 'all'|null,
     *     UserId?: string|null,
     *     OrganizationArn?: string|null,
     *     OrganizationalUnitArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
