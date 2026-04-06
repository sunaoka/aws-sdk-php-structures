<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListGeofencesRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
