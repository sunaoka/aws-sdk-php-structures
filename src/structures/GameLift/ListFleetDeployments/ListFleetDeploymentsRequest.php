<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class ListFleetDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
