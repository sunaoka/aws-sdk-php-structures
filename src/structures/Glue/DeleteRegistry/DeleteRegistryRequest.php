<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId $RegistryId
 */
class DeleteRegistryRequest extends Request
{
    /**
     * @param array{RegistryId: Shapes\RegistryId} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
