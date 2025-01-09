<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataflowEndpointGroupId
 */
class DeleteDataflowEndpointGroupRequest extends Request
{
    /**
     * @param array{dataflowEndpointGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
