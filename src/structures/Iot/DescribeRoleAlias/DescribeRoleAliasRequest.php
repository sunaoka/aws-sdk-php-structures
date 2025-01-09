<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 */
class DescribeRoleAliasRequest extends Request
{
    /**
     * @param array{roleAlias: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
