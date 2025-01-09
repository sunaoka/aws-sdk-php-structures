<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FleetIds
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class DescribeFleetAttributesRequest extends Request
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
