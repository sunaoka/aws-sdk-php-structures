<?php

namespace Sunaoka\Aws\Structures\Iam\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Path
 * @property string $UserName
 * @property string|null $PermissionsBoundary
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     Path?: string|null,
     *     UserName: string,
     *     PermissionsBoundary?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
