<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateCrossAccountAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrossAccountAuthorization
 */
class CreateCrossAccountAuthorizationRequest extends Request
{
    /**
     * @param array{CrossAccountAuthorization: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
