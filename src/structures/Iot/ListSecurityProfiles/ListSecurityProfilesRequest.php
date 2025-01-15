<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $dimensionName
 * @property string|null $metricName
 */
class ListSecurityProfilesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     dimensionName?: string|null,
     *     metricName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
