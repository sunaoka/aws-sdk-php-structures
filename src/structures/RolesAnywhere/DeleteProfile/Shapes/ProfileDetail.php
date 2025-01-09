<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $acceptRoleSessionName
 * @property list<AttributeMapping> $attributeMappings
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property int $durationSeconds
 * @property bool $enabled
 * @property list<string> $managedPolicyArns
 * @property string $name
 * @property string $profileArn
 * @property string $profileId
 * @property bool $requireInstanceProperties
 * @property list<string> $roleArns
 * @property string $sessionPolicy
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ProfileDetail extends Shape
{
    /**
     * @param array{
     *     acceptRoleSessionName?: bool,
     *     attributeMappings?: list<AttributeMapping>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     durationSeconds?: int,
     *     enabled?: bool,
     *     managedPolicyArns?: list<string>,
     *     name?: string,
     *     profileArn?: string,
     *     profileId?: string,
     *     requireInstanceProperties?: bool,
     *     roleArns?: list<string>,
     *     sessionPolicy?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
