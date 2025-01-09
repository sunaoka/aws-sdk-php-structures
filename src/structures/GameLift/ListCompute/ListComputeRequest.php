<?php

namespace Sunaoka\Aws\Structures\GameLift\ListCompute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $Location
 * @property string $ContainerGroupDefinitionName
 * @property 'ACTIVE'|'IMPAIRED' $ComputeStatus
 * @property int $Limit
 * @property string $NextToken
 */
class ListComputeRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Location?: string,
     *     ContainerGroupDefinitionName?: string,
     *     ComputeStatus?: 'ACTIVE'|'IMPAIRED',
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
