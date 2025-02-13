<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UserId'|'UserName'|'Email'|null $userAttribute
 * @property 'GroupId'|'GroupName'|null $groupAttribute
 */
class UpdateIamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     userAttribute?: 'UserId'|'UserName'|'Email'|null,
     *     groupAttribute?: 'GroupId'|'GroupName'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
