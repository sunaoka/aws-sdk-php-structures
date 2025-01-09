<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 */
class DeleteRegistryRequest extends Request
{
    /**
     * @param array{RegistryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
