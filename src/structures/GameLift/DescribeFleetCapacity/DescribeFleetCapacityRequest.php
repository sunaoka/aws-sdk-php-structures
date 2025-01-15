<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $FleetIds
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribeFleetCapacityRequest extends Request
{
    /**
     * @param array{
     *     FleetIds?: list<string>|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
