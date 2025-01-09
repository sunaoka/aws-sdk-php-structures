<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroupConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Group
 */
class GetGroupConfigurationRequest extends Request
{
    /**
     * @param array{Group?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
