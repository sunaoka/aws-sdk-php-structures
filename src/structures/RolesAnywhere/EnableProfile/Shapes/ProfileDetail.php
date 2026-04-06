<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $profileId
 * @property string|null $profileArn
 * @property string|null $name
 * @property bool|null $requireInstanceProperties
 * @property bool|null $enabled
 * @property string|null $createdBy
 * @property string|null $sessionPolicy
 * @property list<string>|null $roleArns
 * @property list<string>|null $managedPolicyArns
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property int|null $durationSeconds
 * @property bool|null $acceptRoleSessionName
 * @property list<AttributeMapping>|null $attributeMappings
 */
class ProfileDetail extends Shape
{
    /**
     * @param array{
     *     profileId?: string|null,
     *     profileArn?: string|null,
     *     name?: string|null,
     *     requireInstanceProperties?: bool|null,
     *     enabled?: bool|null,
     *     createdBy?: string|null,
     *     sessionPolicy?: string|null,
     *     roleArns?: list<string>|null,
     *     managedPolicyArns?: list<string>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     durationSeconds?: int|null,
     *     acceptRoleSessionName?: bool|null,
     *     attributeMappings?: list<AttributeMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
