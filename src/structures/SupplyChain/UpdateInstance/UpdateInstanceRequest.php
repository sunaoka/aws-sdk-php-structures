<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string|null $instanceName
 * @property string|null $instanceDescription
 */
class UpdateInstanceRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     instanceName?: string|null,
     *     instanceDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
