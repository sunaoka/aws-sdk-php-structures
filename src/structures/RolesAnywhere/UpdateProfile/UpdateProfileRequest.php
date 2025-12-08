<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string|null $name
 * @property string|null $sessionPolicy
 * @property list<string>|null $roleArns
 * @property list<string>|null $managedPolicyArns
 * @property int<900, 43200>|null $durationSeconds
 * @property bool|null $acceptRoleSessionName
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     name?: string|null,
     *     sessionPolicy?: string|null,
     *     roleArns?: list<string>|null,
     *     managedPolicyArns?: list<string>|null,
     *     durationSeconds?: int<900, 43200>|null,
     *     acceptRoleSessionName?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
