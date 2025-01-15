<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NamePrefix
 * @property string|null $NextToken
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class ListSchedulesRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NamePrefix?: string|null,
     *     NextToken?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
