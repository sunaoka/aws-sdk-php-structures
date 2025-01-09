<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommands;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise' $namespace
 * @property string $commandParameterName
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListCommandsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     namespace?: 'AWS-IoT'|'AWS-IoT-FleetWise',
     *     commandParameterName?: string,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
