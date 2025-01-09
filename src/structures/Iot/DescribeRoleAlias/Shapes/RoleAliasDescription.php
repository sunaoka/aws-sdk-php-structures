<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeRoleAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleAlias
 * @property string $roleAliasArn
 * @property string $roleArn
 * @property string $owner
 * @property int $credentialDurationSeconds
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 */
class RoleAliasDescription extends Shape
{
    /**
     * @param array{
     *     roleAlias?: string,
     *     roleAliasArn?: string,
     *     roleArn?: string,
     *     owner?: string,
     *     credentialDurationSeconds?: int,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
