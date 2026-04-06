<?php

namespace Sunaoka\Aws\Structures\GameLift\ListCompute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string|null $Location
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListComputeRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Location?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
