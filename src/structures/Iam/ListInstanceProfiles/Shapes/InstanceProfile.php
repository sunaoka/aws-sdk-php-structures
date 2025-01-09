<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $InstanceProfileName
 * @property string $InstanceProfileId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property list<Role> $Roles
 * @property list<Tag> $Tags
 */
class InstanceProfile extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     InstanceProfileName: string,
     *     InstanceProfileId: string,
     *     Arn: string,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     Roles: list<Role>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
