<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $capabilityName
 */
class DeleteCapabilityRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     capabilityName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
