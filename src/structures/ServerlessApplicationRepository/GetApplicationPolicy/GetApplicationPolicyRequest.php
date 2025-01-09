<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplicationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class GetApplicationPolicyRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
