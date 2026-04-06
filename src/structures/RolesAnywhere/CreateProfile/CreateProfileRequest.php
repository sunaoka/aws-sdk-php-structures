<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property bool|null $requireInstanceProperties
 * @property string|null $sessionPolicy
 * @property list<string> $roleArns
 * @property list<string>|null $managedPolicyArns
 * @property int<900, 43200>|null $durationSeconds
 * @property bool|null $enabled
 * @property list<Shapes\Tag>|null $tags
 * @property bool|null $acceptRoleSessionName
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     requireInstanceProperties?: bool|null,
     *     sessionPolicy?: string|null,
     *     roleArns: list<string>,
     *     managedPolicyArns?: list<string>|null,
     *     durationSeconds?: int<900, 43200>|null,
     *     enabled?: bool|null,
     *     tags?: list<Shapes\Tag>|null,
     *     acceptRoleSessionName?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
