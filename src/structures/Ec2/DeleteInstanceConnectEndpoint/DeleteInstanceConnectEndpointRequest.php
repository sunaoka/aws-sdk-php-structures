<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceConnectEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InstanceConnectEndpointId
 */
class DeleteInstanceConnectEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceConnectEndpointId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
