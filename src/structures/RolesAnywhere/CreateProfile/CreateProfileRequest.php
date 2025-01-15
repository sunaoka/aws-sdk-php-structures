<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $acceptRoleSessionName
 * @property int<900, 43200>|null $durationSeconds
 * @property bool|null $enabled
 * @property list<string>|null $managedPolicyArns
 * @property string $name
 * @property bool|null $requireInstanceProperties
 * @property list<string> $roleArns
 * @property string|null $sessionPolicy
 * @property list<Shapes\Tag>|null $tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     acceptRoleSessionName?: bool|null,
     *     durationSeconds?: int<900, 43200>|null,
     *     enabled?: bool|null,
     *     managedPolicyArns?: list<string>|null,
     *     name: string,
     *     requireInstanceProperties?: bool|null,
     *     roleArns: list<string>,
     *     sessionPolicy?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
