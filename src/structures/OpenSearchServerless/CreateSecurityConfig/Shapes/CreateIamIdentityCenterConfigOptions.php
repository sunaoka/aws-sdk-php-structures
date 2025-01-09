<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GroupId'|'GroupName' $groupAttribute
 * @property string $instanceArn
 * @property 'UserId'|'UserName'|'Email' $userAttribute
 */
class CreateIamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: 'GroupId'|'GroupName',
     *     instanceArn: string,
     *     userAttribute?: 'UserId'|'UserName'|'Email'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
