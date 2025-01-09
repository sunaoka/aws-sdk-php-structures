<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommandInvocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CommandId
 * @property string $InstanceId
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\CommandFilter> $Filters
 * @property bool $Details
 */
class ListCommandInvocationsRequest extends Request
{
    /**
     * @param array{
     *     CommandId?: string,
     *     InstanceId?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\CommandFilter>,
     *     Details?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
