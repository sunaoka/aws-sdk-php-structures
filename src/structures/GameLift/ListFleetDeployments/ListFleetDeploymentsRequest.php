<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FleetId
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListFleetDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
