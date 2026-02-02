<?php

namespace Sunaoka\Aws\Structures\Wickr\GetUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $userId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class GetUserRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     userId: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
