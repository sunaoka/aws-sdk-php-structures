<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListGeofencesRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
