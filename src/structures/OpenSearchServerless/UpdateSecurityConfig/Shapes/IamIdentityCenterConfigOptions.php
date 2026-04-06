<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationArn
 * @property string|null $applicationDescription
 * @property string|null $applicationName
 * @property 'GroupId'|'GroupName'|null $groupAttribute
 * @property string|null $instanceArn
 * @property 'UserId'|'UserName'|'Email'|null $userAttribute
 */
class IamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     applicationArn?: string|null,
     *     applicationDescription?: string|null,
     *     applicationName?: string|null,
     *     groupAttribute?: 'GroupId'|'GroupName'|null,
     *     instanceArn?: string|null,
     *     userAttribute?: 'UserId'|'UserName'|'Email'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
