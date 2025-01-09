<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityProfileName
 * @property string $Description
 * @property list<string> $Permissions
 * @property string $InstanceId
 * @property array<string, string> $Tags
 * @property array<string, string> $AllowedAccessControlTags
 * @property list<string> $TagRestrictedResources
 * @property list<Shapes\Application> $Applications
 * @property list<string> $HierarchyRestrictedResources
 * @property string $AllowedAccessControlHierarchyGroupId
 */
class CreateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     SecurityProfileName: string,
     *     Description?: string,
     *     Permissions?: list<string>,
     *     InstanceId: string,
     *     Tags?: array<string, string>,
     *     AllowedAccessControlTags?: array<string, string>,
     *     TagRestrictedResources?: list<string>,
     *     Applications?: list<Shapes\Application>,
     *     HierarchyRestrictedResources?: list<string>,
     *     AllowedAccessControlHierarchyGroupId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
