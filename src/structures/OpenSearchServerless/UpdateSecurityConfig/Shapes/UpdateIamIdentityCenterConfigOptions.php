<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GroupId'|'GroupName' $groupAttribute
 * @property 'UserId'|'UserName'|'Email' $userAttribute
 */
class UpdateIamIdentityCenterConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: 'GroupId'|'GroupName',
     *     userAttribute?: 'UserId'|'UserName'|'Email'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
