<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FleetIds
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeFleetCapacityRequest extends Request
{
    /**
     * @param array{
     *     FleetIds?: list<string>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
