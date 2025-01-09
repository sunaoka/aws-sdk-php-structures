<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteCrossAccountAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrossAccountAuthorization
 */
class DeleteCrossAccountAuthorizationRequest extends Request
{
    /**
     * @param array{CrossAccountAuthorization: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
