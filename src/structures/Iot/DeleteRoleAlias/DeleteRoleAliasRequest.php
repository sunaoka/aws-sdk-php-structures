<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 */
class DeleteRoleAliasRequest extends Request
{
    /**
     * @param array{roleAlias: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
