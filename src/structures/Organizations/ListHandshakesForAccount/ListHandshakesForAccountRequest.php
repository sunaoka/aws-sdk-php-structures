<?php

namespace Sunaoka\Aws\Structures\Organizations\ListHandshakesForAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\HandshakeFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListHandshakesForAccountRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\HandshakeFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
