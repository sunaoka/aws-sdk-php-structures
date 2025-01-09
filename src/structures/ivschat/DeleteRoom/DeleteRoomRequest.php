<?php

namespace Sunaoka\Aws\Structures\ivschat\DeleteRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteRoomRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
