<?php

namespace Sunaoka\Aws\Structures\Iam\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property string $UserName
 * @property string $PermissionsBoundary
 * @property list<Shapes\Tag> $Tags
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     Path?: string,
     *     UserName: string,
     *     PermissionsBoundary?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
