<?php

namespace Sunaoka\Aws\Structures\Lambda\GetCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityProviderName
 */
class GetCapacityProviderRequest extends Request
{
    /**
     * @param array{CapacityProviderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
