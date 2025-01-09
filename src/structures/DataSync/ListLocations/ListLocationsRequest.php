<?php

namespace Sunaoka\Aws\Structures\DataSync\ListLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\LocationFilter> $Filters
 */
class ListLocationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\LocationFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
