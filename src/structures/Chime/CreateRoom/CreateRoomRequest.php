<?php

namespace Sunaoka\Aws\Structures\Chime\CreateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 * @property string $ClientRequestToken
 */
class CreateRoomRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
