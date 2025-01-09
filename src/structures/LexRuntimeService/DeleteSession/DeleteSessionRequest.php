<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\DeleteSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 */
class DeleteSessionRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
