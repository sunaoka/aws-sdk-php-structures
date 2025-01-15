<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommands;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise'|null $namespace
 * @property string|null $commandParameterName
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListCommandsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     namespace?: 'AWS-IoT'|'AWS-IoT-FleetWise'|null,
     *     commandParameterName?: string|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
