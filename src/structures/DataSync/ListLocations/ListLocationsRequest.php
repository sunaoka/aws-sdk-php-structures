<?php

namespace Sunaoka\Aws\Structures\DataSync\ListLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\LocationFilter>|null $Filters
 */
class ListLocationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\LocationFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
