<?php

namespace Sunaoka\Aws\Structures\DataSync\ListLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\LocationFilter> $Filters
 */
class ListLocationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\LocationFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
