<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityProfileName
 * @property string|null $Description
 * @property list<string>|null $Permissions
 * @property string $InstanceId
 * @property array<string, string>|null $Tags
 * @property array<string, string>|null $AllowedAccessControlTags
 * @property list<string>|null $TagRestrictedResources
 * @property list<Shapes\Application>|null $Applications
 * @property list<string>|null $HierarchyRestrictedResources
 * @property string|null $AllowedAccessControlHierarchyGroupId
 */
class CreateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     SecurityProfileName: string,
     *     Description?: string|null,
     *     Permissions?: list<string>|null,
     *     InstanceId: string,
     *     Tags?: array<string, string>|null,
     *     AllowedAccessControlTags?: array<string, string>|null,
     *     TagRestrictedResources?: list<string>|null,
     *     Applications?: list<Shapes\Application>|null,
     *     HierarchyRestrictedResources?: list<string>|null,
     *     AllowedAccessControlHierarchyGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
