<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $SessionId
 */
class DeleteSessionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
