<?php

namespace Sunaoka\Aws\Structures\Iam\UntagRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property list<string> $TagKeys
 */
class UntagRoleRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
