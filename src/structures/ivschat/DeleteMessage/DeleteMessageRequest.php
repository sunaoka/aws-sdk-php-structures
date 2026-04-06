<?php

namespace Sunaoka\Aws\Structures\ivschat\DeleteMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $reason
 * @property string $roomIdentifier
 */
class DeleteMessageRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     reason?: string|null,
     *     roomIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
