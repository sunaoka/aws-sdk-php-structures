<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BuildId
 * @property string|null $ScriptId
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListFleetsRequest extends Request
{
    /**
     * @param array{
     *     BuildId?: string|null,
     *     ScriptId?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
