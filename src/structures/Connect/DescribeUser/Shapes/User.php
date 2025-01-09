<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Username
 * @property UserIdentityInfo $IdentityInfo
 * @property UserPhoneConfig $PhoneConfig
 * @property string $DirectoryUserId
 * @property list<string> $SecurityProfileIds
 * @property string $RoutingProfileId
 * @property string $HierarchyGroupId
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class User extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Username?: string,
     *     IdentityInfo?: UserIdentityInfo,
     *     PhoneConfig?: UserPhoneConfig,
     *     DirectoryUserId?: string,
     *     SecurityProfileIds?: list<string>,
     *     RoutingProfileId?: string,
     *     HierarchyGroupId?: string,
     *     Tags?: array<string, string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
