<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateImagePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $SharedAccountId
 * @property Shapes\ImagePermissions $ImagePermissions
 */
class UpdateImagePermissionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SharedAccountId: string,
     *     ImagePermissions: Shapes\ImagePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
