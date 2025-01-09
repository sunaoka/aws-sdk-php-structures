<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<string> $Locations
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class DescribeFleetLocationAttributesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Locations?: list<string>,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
