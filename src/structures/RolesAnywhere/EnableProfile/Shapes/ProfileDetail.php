<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $acceptRoleSessionName
 * @property list<AttributeMapping>|null $attributeMappings
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property int|null $durationSeconds
 * @property bool|null $enabled
 * @property list<string>|null $managedPolicyArns
 * @property string|null $name
 * @property string|null $profileArn
 * @property string|null $profileId
 * @property bool|null $requireInstanceProperties
 * @property list<string>|null $roleArns
 * @property string|null $sessionPolicy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ProfileDetail extends Shape
{
    /**
     * @param array{
     *     acceptRoleSessionName?: bool|null,
     *     attributeMappings?: list<AttributeMapping>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     durationSeconds?: int|null,
     *     enabled?: bool|null,
     *     managedPolicyArns?: list<string>|null,
     *     name?: string|null,
     *     profileArn?: string|null,
     *     profileId?: string|null,
     *     requireInstanceProperties?: bool|null,
     *     roleArns?: list<string>|null,
     *     sessionPolicy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
