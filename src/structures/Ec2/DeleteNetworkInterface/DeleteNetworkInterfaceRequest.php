<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkInterfaceId
 */
class DeleteNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkInterfaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
