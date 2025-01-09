<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $dimensionName
 * @property string $metricName
 */
class ListSecurityProfilesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     dimensionName?: string,
     *     metricName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
