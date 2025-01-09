<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachineAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 */
class ListStateMachineAliasesRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
