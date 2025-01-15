<?php

namespace Sunaoka\Aws\Structures\Chime\CreateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 * @property string|null $ClientRequestToken
 */
class CreateRoomRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
