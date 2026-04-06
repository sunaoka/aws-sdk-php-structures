<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityProviderName
 */
class DeleteCapacityProviderRequest extends Request
{
    /**
     * @param array{CapacityProviderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
