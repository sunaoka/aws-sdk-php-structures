<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BuildId
 * @property string $ScriptId
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     BuildId?: string,
     *     ScriptId?: string,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
