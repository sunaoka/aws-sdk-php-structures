<?php

namespace Sunaoka\Aws\Structures\Iam\TagRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property list<Shapes\Tag> $Tags
 */
class TagRoleRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
