<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<900, 3600>|null $durationSeconds
 * @property list<string>|null $managedPolicyArns
 * @property string|null $name
 * @property string $profileId
 * @property list<string>|null $roleArns
 * @property string|null $sessionPolicy
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     durationSeconds?: int<900, 3600>|null,
     *     managedPolicyArns?: list<string>|null,
     *     name?: string|null,
     *     profileId: string,
     *     roleArns?: list<string>|null,
     *     sessionPolicy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
