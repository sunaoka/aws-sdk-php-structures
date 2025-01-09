<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataflowEndpointGroupId
 */
class GetDataflowEndpointGroupRequest extends Request
{
    /**
     * @param array{dataflowEndpointGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
