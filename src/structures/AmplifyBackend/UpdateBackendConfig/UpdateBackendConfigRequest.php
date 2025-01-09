<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property Shapes\LoginAuthConfigReqObj $LoginAuthConfig
 */
class UpdateBackendConfigRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     LoginAuthConfig?: Shapes\LoginAuthConfigReqObj
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
