<?php

namespace Sunaoka\Aws\Structures\Glue\GetRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId $RegistryId
 */
class GetRegistryRequest extends Request
{
    /**
     * @param array{RegistryId: Shapes\RegistryId} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
