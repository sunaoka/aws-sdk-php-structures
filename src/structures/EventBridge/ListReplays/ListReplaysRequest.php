<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListReplays;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $State
 * @property string|null $EventSourceArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListReplaysRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     State?: 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED'|null,
     *     EventSourceArn?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
