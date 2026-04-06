<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceArn
 * @property string|null $applicationArn
 * @property string|null $applicationName
 * @property string|null $applicationDescription
 * @property 'UserId'|'UserName'|'Email'|null $userAttribute
 * @property 'GroupId'|'GroupName'|null $groupAttribute
 */
class IamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     instanceArn?: string|null,
     *     applicationArn?: string|null,
     *     applicationName?: string|null,
     *     applicationDescription?: string|null,
     *     userAttribute?: 'UserId'|'UserName'|'Email'|null,
     *     groupAttribute?: 'GroupId'|'GroupName'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
