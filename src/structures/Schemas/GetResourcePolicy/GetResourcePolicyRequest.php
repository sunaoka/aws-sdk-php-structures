<?php

namespace Sunaoka\Aws\Structures\Schemas\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{RegistryName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
