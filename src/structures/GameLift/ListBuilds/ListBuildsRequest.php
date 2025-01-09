<?php

namespace Sunaoka\Aws\Structures\GameLift\ListBuilds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'INITIALIZED'|'READY'|'FAILED' $Status
 * @property int $Limit
 * @property string $NextToken
 */
class ListBuildsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'INITIALIZED'|'READY'|'FAILED',
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
