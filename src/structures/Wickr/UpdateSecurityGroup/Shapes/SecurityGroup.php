<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $activeMembers
 * @property int $botMembers
 * @property string|null $activeDirectoryGuid
 * @property string $id
 * @property bool $isDefault
 * @property string $name
 * @property int $modified
 * @property SecurityGroupSettings $securityGroupSettings
 */
class SecurityGroup extends Shape
{
    /**
     * @param array{
     *     activeMembers: int,
     *     botMembers: int,
     *     activeDirectoryGuid?: string|null,
     *     id: string,
     *     isDefault: bool,
     *     name: string,
     *     modified: int,
     *     securityGroupSettings: SecurityGroupSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
