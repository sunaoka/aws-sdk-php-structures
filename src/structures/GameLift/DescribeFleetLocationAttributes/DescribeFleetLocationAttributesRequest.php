<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<string> $Locations
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeFleetLocationAttributesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Locations?: list<string>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
