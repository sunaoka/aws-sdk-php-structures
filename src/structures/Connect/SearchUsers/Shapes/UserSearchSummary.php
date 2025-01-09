<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $DirectoryUserId
 * @property string $HierarchyGroupId
 * @property string $Id
 * @property UserIdentityInfoLite $IdentityInfo
 * @property UserPhoneConfig $PhoneConfig
 * @property string $RoutingProfileId
 * @property list<string> $SecurityProfileIds
 * @property array<string, string> $Tags
 * @property string $Username
 */
class UserSearchSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     DirectoryUserId?: string,
     *     HierarchyGroupId?: string,
     *     Id?: string,
     *     IdentityInfo?: UserIdentityInfoLite,
     *     PhoneConfig?: UserPhoneConfig,
     *     RoutingProfileId?: string,
     *     SecurityProfileIds?: list<string>,
     *     Tags?: array<string, string>,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
