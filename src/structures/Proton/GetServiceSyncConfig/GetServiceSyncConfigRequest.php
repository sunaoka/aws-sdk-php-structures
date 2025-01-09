<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 */
class GetServiceSyncConfigRequest extends Request
{
    /**
     * @param array{serviceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
