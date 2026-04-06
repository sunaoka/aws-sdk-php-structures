<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceArn
 * @property 'UserId'|'UserName'|'Email'|null $userAttribute
 * @property 'GroupId'|'GroupName'|null $groupAttribute
 */
class CreateIamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     instanceArn: string,
     *     userAttribute?: 'UserId'|'UserName'|'Email'|null,
     *     groupAttribute?: 'GroupId'|'GroupName'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
