<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteServiceSyncConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 */
class DeleteServiceSyncConfigRequest extends Request
{
    /**
     * @param array{serviceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
