<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOutposts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<string>|null $LifeCycleStatusFilter
 * @property list<string>|null $AvailabilityZoneFilter
 * @property list<string>|null $AvailabilityZoneIdFilter
 */
class ListOutpostsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     LifeCycleStatusFilter?: list<string>|null,
     *     AvailabilityZoneFilter?: list<string>|null,
     *     AvailabilityZoneIdFilter?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
