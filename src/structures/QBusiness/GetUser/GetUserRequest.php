<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 */
class GetUserRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
