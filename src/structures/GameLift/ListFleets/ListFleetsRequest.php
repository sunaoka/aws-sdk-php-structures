<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BuildId
 * @property string $ScriptId
 * @property int $Limit
 * @property string $NextToken
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     BuildId?: string,
     *     ScriptId?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
