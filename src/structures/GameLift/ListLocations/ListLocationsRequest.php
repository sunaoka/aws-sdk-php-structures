<?php

namespace Sunaoka\Aws\Structures\GameLift\ListLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'AWS'|'CUSTOM'>|null $Filters
 * @property int<1, 200>|null $Limit
 * @property string|null $NextToken
 */
class ListLocationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<'AWS'|'CUSTOM'>|null,
     *     Limit?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
