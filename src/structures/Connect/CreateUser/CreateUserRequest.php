<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Username
 * @property string|null $Password
 * @property Shapes\UserIdentityInfo|null $IdentityInfo
 * @property Shapes\UserPhoneConfig $PhoneConfig
 * @property string|null $DirectoryUserId
 * @property list<string> $SecurityProfileIds
 * @property string $RoutingProfileId
 * @property string|null $HierarchyGroupId
 * @property string $InstanceId
 * @property array<string, string>|null $Tags
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     Username: string,
     *     Password?: string|null,
     *     IdentityInfo?: Shapes\UserIdentityInfo|null,
     *     PhoneConfig: Shapes\UserPhoneConfig,
     *     DirectoryUserId?: string|null,
     *     SecurityProfileIds: list<string>,
     *     RoutingProfileId: string,
     *     HierarchyGroupId?: string|null,
     *     InstanceId: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
