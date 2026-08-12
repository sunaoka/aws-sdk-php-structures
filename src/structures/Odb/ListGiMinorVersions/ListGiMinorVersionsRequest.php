<?php

namespace Sunaoka\Aws\Structures\Odb\ListGiMinorVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $giVersion
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $shapeFamily
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 */
class ListGiMinorVersionsRequest extends Request
{
    /**
     * @param array{
     *     giVersion: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     shapeFamily?: string|null,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
