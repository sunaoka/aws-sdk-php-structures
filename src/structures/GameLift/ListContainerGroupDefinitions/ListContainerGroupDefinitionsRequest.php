<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'REPLICA'|'DAEMON'|null $SchedulingStrategy
 * @property int<1, 10>|null $Limit
 * @property string|null $NextToken
 */
class ListContainerGroupDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     SchedulingStrategy?: 'REPLICA'|'DAEMON'|null,
     *     Limit?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
