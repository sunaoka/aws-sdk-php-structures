<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListGeofencesRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
