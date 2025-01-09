<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $instanceName
 * @property string $instanceDescription
 */
class UpdateInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     instanceName?: string,
     *     instanceDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
