<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachineAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class ListStateMachineAliasesRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
