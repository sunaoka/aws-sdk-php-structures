<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<string>|null $Locations
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribeFleetLocationAttributesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Locations?: list<string>|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
