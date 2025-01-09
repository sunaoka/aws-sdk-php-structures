<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property list<Shapes\ServiceFilter> $Filters
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     Filters?: list<Shapes\ServiceFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
