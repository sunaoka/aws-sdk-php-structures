<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $OrganizationResourceId
 * @property string|null $Arn
 * @property string|null $SecurityProfileName
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property array<string, string>|null $AllowedAccessControlTags
 * @property list<string>|null $TagRestrictedResources
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 * @property list<string>|null $HierarchyRestrictedResources
 * @property string|null $AllowedAccessControlHierarchyGroupId
 */
class SecurityProfile extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     OrganizationResourceId?: string|null,
     *     Arn?: string|null,
     *     SecurityProfileName?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     AllowedAccessControlTags?: array<string, string>|null,
     *     TagRestrictedResources?: list<string>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null,
     *     HierarchyRestrictedResources?: list<string>|null,
     *     AllowedAccessControlHierarchyGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
