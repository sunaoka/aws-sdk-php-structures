<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property bool $DryRun
 */
class DeleteClientVpnEndpointRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
