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
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
