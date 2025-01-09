<?php

namespace Sunaoka\Aws\Structures\GameLift\ListLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'AWS'|'CUSTOM'> $Filters
 * @property int<1, 200> $Limit
 * @property string $NextToken
 */
class ListLocationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<'AWS'|'CUSTOM'>,
     *     Limit?: int<1, 200>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
