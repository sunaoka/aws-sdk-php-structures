<?php

namespace Sunaoka\Aws\Structures\GameLift\ListBuilds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'INITIALIZED'|'READY'|'FAILED'|null $Status
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListBuildsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'INITIALIZED'|'READY'|'FAILED'|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
