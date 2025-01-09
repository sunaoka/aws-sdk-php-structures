<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOutposts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property list<string> $LifeCycleStatusFilter
 * @property list<string> $AvailabilityZoneFilter
 * @property list<string> $AvailabilityZoneIdFilter
 */
class ListOutpostsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     LifeCycleStatusFilter?: list<string>,
     *     AvailabilityZoneFilter?: list<string>,
     *     AvailabilityZoneIdFilter?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
