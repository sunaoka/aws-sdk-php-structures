<?php

namespace Sunaoka\Aws\Structures\Signin\GetConsoleAuthorizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $targetId
 */
class GetConsoleAuthorizationConfigurationRequest extends Request
{
    /**
     * @param array{targetId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
