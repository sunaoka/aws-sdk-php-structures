<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $OrganizationResourceId
 * @property string $Arn
 * @property string $SecurityProfileName
 * @property string $Description
 * @property array<string, string> $Tags
 * @property array<string, string> $AllowedAccessControlTags
 * @property list<string> $TagRestrictedResources
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 * @property list<string> $HierarchyRestrictedResources
 * @property string $AllowedAccessControlHierarchyGroupId
 */
class SecurityProfile extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     OrganizationResourceId?: string,
     *     Arn?: string,
     *     SecurityProfileName?: string,
     *     Description?: string,
     *     Tags?: array<string, string>,
     *     AllowedAccessControlTags?: array<string, string>,
     *     TagRestrictedResources?: list<string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string,
     *     HierarchyRestrictedResources?: list<string>,
     *     AllowedAccessControlHierarchyGroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
