<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOutposts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<string> $LifeCycleStatusFilter
 * @property list<string> $AvailabilityZoneFilter
 * @property list<string> $AvailabilityZoneIdFilter
 */
class ListOutpostsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
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
