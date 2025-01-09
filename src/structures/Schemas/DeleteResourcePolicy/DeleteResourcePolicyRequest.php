<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{RegistryName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
