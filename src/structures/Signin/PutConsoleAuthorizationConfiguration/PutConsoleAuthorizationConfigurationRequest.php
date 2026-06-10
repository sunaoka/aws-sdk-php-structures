<?php

namespace Sunaoka\Aws\Structures\Signin\PutConsoleAuthorizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $targetId
 */
class PutConsoleAuthorizationConfigurationRequest extends Request
{
    /**
     * @param array{targetId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
