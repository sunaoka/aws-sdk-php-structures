<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImagePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $SharedAccountId
 */
class DeleteImagePermissionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SharedAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
