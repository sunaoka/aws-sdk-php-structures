<?php

namespace Sunaoka\Aws\Structures\Repostspace\DeregisterAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminId
 * @property string $spaceId
 */
class DeregisterAdminRequest extends Request
{
    /**
     * @param array{
     *     adminId: string,
     *     spaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
