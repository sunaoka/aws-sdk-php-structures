<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationArn
 * @property string $applicationDescription
 * @property string $applicationName
 * @property 'GroupId'|'GroupName' $groupAttribute
 * @property string $instanceArn
 * @property 'UserId'|'UserName'|'Email' $userAttribute
 */
class IamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     applicationArn?: string,
     *     applicationDescription?: string,
     *     applicationName?: string,
     *     groupAttribute?: 'GroupId'|'GroupName',
     *     instanceArn?: string,
     *     userAttribute?: 'UserId'|'UserName'|'Email'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
