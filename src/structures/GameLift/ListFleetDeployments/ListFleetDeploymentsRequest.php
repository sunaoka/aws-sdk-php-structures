<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property int $Limit
 * @property string $NextToken
 */
class ListFleetDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
