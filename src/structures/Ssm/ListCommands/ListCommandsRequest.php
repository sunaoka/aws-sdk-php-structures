<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommands;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CommandId
 * @property string|null $InstanceId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\CommandFilter>|null $Filters
 */
class ListCommandsRequest extends Request
{
    /**
     * @param array{
     *     CommandId?: string|null,
     *     InstanceId?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\CommandFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
