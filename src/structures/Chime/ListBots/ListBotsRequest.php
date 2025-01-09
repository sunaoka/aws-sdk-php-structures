<?php

namespace Sunaoka\Aws\Structures\Chime\ListBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListBotsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
