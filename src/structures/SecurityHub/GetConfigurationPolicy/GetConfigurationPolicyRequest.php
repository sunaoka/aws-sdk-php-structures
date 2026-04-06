<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetConfigurationPolicyRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
