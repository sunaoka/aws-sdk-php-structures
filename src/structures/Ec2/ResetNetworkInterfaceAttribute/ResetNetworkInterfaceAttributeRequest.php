<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkInterfaceId
 * @property string $SourceDestCheck
 */
class ResetNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkInterfaceId: string,
     *     SourceDestCheck?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
