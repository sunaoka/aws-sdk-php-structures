<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Username
 * @property UserIdentityInfo|null $IdentityInfo
 * @property UserPhoneConfig|null $PhoneConfig
 * @property string|null $DirectoryUserId
 * @property list<string>|null $SecurityProfileIds
 * @property string|null $RoutingProfileId
 * @property string|null $HierarchyGroupId
 * @property array<string, string>|null $Tags
 * @property list<AutoAcceptConfig>|null $AutoAcceptConfigs
 * @property list<AfterContactWorkConfigPerChannel>|null $AfterContactWorkConfigs
 * @property list<PhoneNumberConfig>|null $PhoneNumberConfigs
 * @property list<PersistentConnectionConfig>|null $PersistentConnectionConfigs
 * @property list<VoiceEnhancementConfig>|null $VoiceEnhancementConfigs
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class User extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Username?: string|null,
     *     IdentityInfo?: UserIdentityInfo|null,
     *     PhoneConfig?: UserPhoneConfig|null,
     *     DirectoryUserId?: string|null,
     *     SecurityProfileIds?: list<string>|null,
     *     RoutingProfileId?: string|null,
     *     HierarchyGroupId?: string|null,
     *     Tags?: array<string, string>|null,
     *     AutoAcceptConfigs?: list<AutoAcceptConfig>|null,
     *     AfterContactWorkConfigs?: list<AfterContactWorkConfigPerChannel>|null,
     *     PhoneNumberConfigs?: list<PhoneNumberConfig>|null,
     *     PersistentConnectionConfigs?: list<PersistentConnectionConfig>|null,
     *     VoiceEnhancementConfigs?: list<VoiceEnhancementConfig>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
