<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetPrivateGraphEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $vpcId
 */
class GetPrivateGraphEndpointRequest extends Request
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
