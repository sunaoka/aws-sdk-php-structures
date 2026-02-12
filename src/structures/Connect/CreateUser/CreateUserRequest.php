<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Username
 * @property string|null $Password
 * @property Shapes\UserIdentityInfo|null $IdentityInfo
 * @property Shapes\UserPhoneConfig|null $PhoneConfig
 * @property string|null $DirectoryUserId
 * @property list<string> $SecurityProfileIds
 * @property string $RoutingProfileId
 * @property string|null $HierarchyGroupId
 * @property string $InstanceId
 * @property list<Shapes\AutoAcceptConfig>|null $AutoAcceptConfigs
 * @property list<Shapes\AfterContactWorkConfigPerChannel>|null $AfterContactWorkConfigs
 * @property list<Shapes\PhoneNumberConfig>|null $PhoneNumberConfigs
 * @property list<Shapes\PersistentConnectionConfig>|null $PersistentConnectionConfigs
 * @property list<Shapes\VoiceEnhancementConfig>|null $VoiceEnhancementConfigs
 * @property array<string, string>|null $Tags
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     Username: string,
     *     Password?: string|null,
     *     IdentityInfo?: Shapes\UserIdentityInfo|null,
     *     PhoneConfig?: Shapes\UserPhoneConfig|null,
     *     DirectoryUserId?: string|null,
     *     SecurityProfileIds: list<string>,
     *     RoutingProfileId: string,
     *     HierarchyGroupId?: string|null,
     *     InstanceId: string,
     *     AutoAcceptConfigs?: list<Shapes\AutoAcceptConfig>|null,
     *     AfterContactWorkConfigs?: list<Shapes\AfterContactWorkConfigPerChannel>|null,
     *     PhoneNumberConfigs?: list<Shapes\PhoneNumberConfig>|null,
     *     PersistentConnectionConfigs?: list<Shapes\PersistentConnectionConfig>|null,
     *     VoiceEnhancementConfigs?: list<Shapes\VoiceEnhancementConfig>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
