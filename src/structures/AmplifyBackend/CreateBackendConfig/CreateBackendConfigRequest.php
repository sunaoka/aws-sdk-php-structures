<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendManagerAppId
 */
class CreateBackendConfigRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendManagerAppId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
