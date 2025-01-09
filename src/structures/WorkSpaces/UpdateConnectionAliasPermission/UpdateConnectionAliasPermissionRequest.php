<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateConnectionAliasPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 * @property Shapes\ConnectionAliasPermission $ConnectionAliasPermission
 */
class UpdateConnectionAliasPermissionRequest extends Request
{
    /**
     * @param array{
     *     AliasId: string,
     *     ConnectionAliasPermission: Shapes\ConnectionAliasPermission
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
