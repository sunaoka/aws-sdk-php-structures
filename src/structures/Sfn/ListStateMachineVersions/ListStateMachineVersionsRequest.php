<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListStateMachineVersionsRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
