<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommands;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CommandId
 * @property string $InstanceId
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\CommandFilter> $Filters
 */
class ListCommandsRequest extends Request
{
    /**
     * @param array{
     *     CommandId?: string,
     *     InstanceId?: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\CommandFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
