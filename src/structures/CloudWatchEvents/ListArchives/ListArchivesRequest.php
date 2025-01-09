<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListArchives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $EventSourceArn
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $State
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListArchivesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     EventSourceArn?: string,
     *     State?: 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
