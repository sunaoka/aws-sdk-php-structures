<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<string> $Permissions
 * @property string $SecurityProfileId
 * @property string $InstanceId
 * @property array<string, string> $AllowedAccessControlTags
 * @property list<string> $TagRestrictedResources
 * @property list<Shapes\Application> $Applications
 * @property list<string> $HierarchyRestrictedResources
 * @property string $AllowedAccessControlHierarchyGroupId
 */
class UpdateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Permissions?: list<string>,
     *     SecurityProfileId: string,
     *     InstanceId: string,
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
