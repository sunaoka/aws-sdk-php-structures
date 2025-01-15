<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NetworkInterfaceId
 */
class DeleteNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NetworkInterfaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
