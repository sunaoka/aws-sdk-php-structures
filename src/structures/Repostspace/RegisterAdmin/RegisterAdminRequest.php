<?php

namespace Sunaoka\Aws\Structures\Repostspace\RegisterAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $adminId
 */
class RegisterAdminRequest extends Request
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
