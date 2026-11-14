<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $NamePrefix
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListSchedulesRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     NamePrefix?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
