<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListArchives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property string|null $EventSourceArn
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null $State
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListArchivesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     EventSourceArn?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
