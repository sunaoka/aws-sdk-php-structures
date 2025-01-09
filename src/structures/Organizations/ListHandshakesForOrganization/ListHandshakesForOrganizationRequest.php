<?php

namespace Sunaoka\Aws\Structures\Organizations\ListHandshakesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\HandshakeFilter $Filter
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListHandshakesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\HandshakeFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
