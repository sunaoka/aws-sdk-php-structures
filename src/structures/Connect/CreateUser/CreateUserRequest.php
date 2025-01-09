<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Username
 * @property string $Password
 * @property Shapes\UserIdentityInfo $IdentityInfo
 * @property Shapes\UserPhoneConfig $PhoneConfig
 * @property string $DirectoryUserId
 * @property list<string> $SecurityProfileIds
 * @property string $RoutingProfileId
 * @property string $HierarchyGroupId
 * @property string $InstanceId
 * @property array<string, string> $Tags
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     Username: string,
     *     Password?: string,
     *     IdentityInfo?: Shapes\UserIdentityInfo,
     *     PhoneConfig: Shapes\UserPhoneConfig,
     *     DirectoryUserId?: string,
     *     SecurityProfileIds: list<string>,
     *     RoutingProfileId: string,
     *     HierarchyGroupId?: string,
     *     InstanceId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
