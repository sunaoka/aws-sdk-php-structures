<?php

namespace Sunaoka\Aws\Structures\Repostspace\DeregisterAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $adminId
 */
class DeregisterAdminRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     adminId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
