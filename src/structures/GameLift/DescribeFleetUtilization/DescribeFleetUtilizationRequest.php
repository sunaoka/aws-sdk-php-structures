<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetUtilization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FleetIds
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeFleetUtilizationRequest extends Request
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
