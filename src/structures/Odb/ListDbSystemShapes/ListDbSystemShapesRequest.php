<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbSystemShapes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 */
class ListDbSystemShapesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
