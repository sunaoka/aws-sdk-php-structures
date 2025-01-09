<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $acceptRoleSessionName
 * @property int $durationSeconds
 * @property bool $enabled
 * @property list<string> $managedPolicyArns
 * @property string $name
 * @property bool $requireInstanceProperties
 * @property list<string> $roleArns
 * @property string $sessionPolicy
 * @property list<Shapes\Tag> $tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     acceptRoleSessionName?: bool,
     *     durationSeconds?: int,
     *     enabled?: bool,
     *     managedPolicyArns?: list<string>,
     *     name: string,
     *     requireInstanceProperties?: bool,
     *     roleArns: list<string>,
     *     sessionPolicy?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
