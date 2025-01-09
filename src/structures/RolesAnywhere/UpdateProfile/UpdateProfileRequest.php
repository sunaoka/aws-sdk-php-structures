<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $acceptRoleSessionName
 * @property int $durationSeconds
 * @property list<string> $managedPolicyArns
 * @property string $name
 * @property string $profileId
 * @property list<string> $roleArns
 * @property string $sessionPolicy
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     acceptRoleSessionName?: bool,
     *     durationSeconds?: int,
     *     managedPolicyArns?: list<string>,
     *     name?: string,
     *     profileId: string,
     *     roleArns?: list<string>,
     *     sessionPolicy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
