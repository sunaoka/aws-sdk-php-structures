<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $DirectoryUserId
 * @property string|null $HierarchyGroupId
 * @property string|null $Id
 * @property UserIdentityInfoLite|null $IdentityInfo
 * @property UserPhoneConfig|null $PhoneConfig
 * @property string|null $RoutingProfileId
 * @property list<string>|null $SecurityProfileIds
 * @property array<string, string>|null $Tags
 * @property string|null $Username
 */
class UserSearchSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     DirectoryUserId?: string|null,
     *     HierarchyGroupId?: string|null,
     *     Id?: string|null,
     *     IdentityInfo?: UserIdentityInfoLite|null,
     *     PhoneConfig?: UserPhoneConfig|null,
     *     RoutingProfileId?: string|null,
     *     SecurityProfileIds?: list<string>|null,
     *     Tags?: array<string, string>|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
