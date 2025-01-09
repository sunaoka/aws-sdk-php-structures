<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FleetIds
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class DescribeFleetCapacityRequest extends Request
{
    /**
     * @param array{
     *     FleetIds?: list<string>,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
