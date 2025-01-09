<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteUtterances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $userId
 */
class DeleteUtterancesRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
