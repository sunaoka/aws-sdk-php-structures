<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property int $MaxResults
 * @property string $NamePrefix
 * @property string $NextToken
 * @property 'ENABLED'|'DISABLED' $State
 */
class ListSchedulesRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     MaxResults?: int,
     *     NamePrefix?: string,
     *     NextToken?: string,
     *     State?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
