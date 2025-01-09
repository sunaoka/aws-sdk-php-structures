<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\RemoveBackendConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 */
class RemoveBackendConfigRequest extends Request
{
    /**
     * @param array{AppId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
