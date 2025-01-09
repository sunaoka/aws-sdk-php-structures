<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListReplays;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED' $State
 * @property string $EventSourceArn
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListReplaysRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     State?: 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED',
     *     EventSourceArn?: string,
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
