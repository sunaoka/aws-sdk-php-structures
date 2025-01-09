<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationArn
 * @property string $OrganizationalUnitArn
 * @property string $UserId
 * @property 'all' $Group
 */
class LaunchPermission extends Shape
{
    /**
     * @param array{
     *     OrganizationArn?: string,
     *     OrganizationalUnitArn?: string,
     *     UserId?: string,
     *     Group?: 'all'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
