<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
