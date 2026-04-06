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
     *     TagRestrictedResources?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
