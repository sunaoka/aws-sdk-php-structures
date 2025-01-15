<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string|null $BackendManagerAppId
 */
class CreateBackendConfigRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendManagerAppId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
