<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<string>|null $Permissions
 * @property string $SecurityProfileId
 * @property string $InstanceId
 * @property array<string, string>|null $AllowedAccessControlTags
 * @property list<string>|null $TagRestrictedResources
 * @property list<Shapes\Application>|null $Applications
 * @property list<string>|null $HierarchyRestrictedResources
 * @property string|null $AllowedAccessControlHierarchyGroupId
 * @property list<Shapes\FlowModule>|null $AllowedFlowModules
 * @property Shapes\GranularAccessControlConfiguration|null $GranularAccessControlConfiguration
 */
class UpdateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Permissions?: list<string>|null,
     *     SecurityProfileId: string,
     *     InstanceId: string,
     *     AllowedAccessControlTags?: array<string, string>|null,
     *     TagRestrictedResources?: list<string>|null,
     *     Applications?: list<Shapes\Application>|null,
     *     HierarchyRestrictedResources?: list<string>|null,
     *     AllowedAccessControlHierarchyGroupId?: string|null,
     *     AllowedFlowModules?: list<Shapes\FlowModule>|null,
     *     GranularAccessControlConfiguration?: Shapes\GranularAccessControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
