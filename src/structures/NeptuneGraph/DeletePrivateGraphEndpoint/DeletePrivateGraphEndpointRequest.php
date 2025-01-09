<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeletePrivateGraphEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $vpcId
 */
class DeletePrivateGraphEndpointRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     vpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
