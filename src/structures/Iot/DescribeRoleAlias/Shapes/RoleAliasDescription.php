<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeRoleAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $roleAlias
 * @property string|null $roleAliasArn
 * @property string|null $roleArn
 * @property string|null $owner
 * @property int<900, 43200>|null $credentialDurationSeconds
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class RoleAliasDescription extends Shape
{
    /**
     * @param array{
     *     roleAlias?: string|null,
     *     roleAliasArn?: string|null,
     *     roleArn?: string|null,
     *     owner?: string|null,
     *     credentialDurationSeconds?: int<900, 43200>|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
