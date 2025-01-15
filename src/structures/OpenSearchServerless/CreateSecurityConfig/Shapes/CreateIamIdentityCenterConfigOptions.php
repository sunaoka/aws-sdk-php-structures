<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GroupId'|'GroupName'|null $groupAttribute
 * @property string $instanceArn
 * @property 'UserId'|'UserName'|'Email'|null $userAttribute
 */
class CreateIamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: 'GroupId'|'GroupName'|null,
     *     instanceArn: string,
     *     userAttribute?: 'UserId'|'UserName'|'Email'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
