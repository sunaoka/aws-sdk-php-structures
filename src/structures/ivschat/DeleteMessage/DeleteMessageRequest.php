<?php

namespace Sunaoka\Aws\Structures\ivschat\DeleteMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roomIdentifier
 * @property string $id
 * @property string $reason
 */
class DeleteMessageRequest extends Request
{
    /**
     * @param array{
     *     roomIdentifier: string,
     *     id: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
