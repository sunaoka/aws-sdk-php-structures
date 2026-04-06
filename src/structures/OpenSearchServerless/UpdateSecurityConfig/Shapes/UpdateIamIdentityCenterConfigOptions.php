<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GroupId'|'GroupName'|null $groupAttribute
 * @property 'UserId'|'UserName'|'Email'|null $userAttribute
 */
class UpdateIamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: 'GroupId'|'GroupName'|null,
     *     userAttribute?: 'UserId'|'UserName'|'Email'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
