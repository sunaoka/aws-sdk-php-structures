<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $userName
 * @property string $iamRole
 * @property string|null $clientToken
 */
class UpdateKxUserRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     userName: string,
     *     iamRole: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
