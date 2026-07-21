<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeQev2IdcApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdcInstanceArn
 * @property string|null $Qev2IdcApplicationName
 * @property string|null $Qev2IdcApplicationArn
 * @property string|null $IdcManagedApplicationArn
 * @property string|null $IdcOnboardStatus
 * @property string|null $IdcDisplayName
 * @property list<Tag>|null $Tags
 */
class Qev2IdcApplication extends Shape
{
    /**
     * @param array{
     *     IdcInstanceArn?: string|null,
     *     Qev2IdcApplicationName?: string|null,
     *     Qev2IdcApplicationArn?: string|null,
     *     IdcManagedApplicationArn?: string|null,
     *     IdcOnboardStatus?: string|null,
     *     IdcDisplayName?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
