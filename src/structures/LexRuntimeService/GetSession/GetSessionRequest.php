<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $userId
 * @property string $checkpointLabelFilter
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     userId: string,
     *     checkpointLabelFilter?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
