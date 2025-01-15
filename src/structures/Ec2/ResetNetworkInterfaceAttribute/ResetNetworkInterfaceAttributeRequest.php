<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NetworkInterfaceId
 * @property string|null $SourceDestCheck
 */
class ResetNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NetworkInterfaceId: string,
     *     SourceDestCheck?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
