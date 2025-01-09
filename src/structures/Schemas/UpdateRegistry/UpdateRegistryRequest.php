<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $RegistryName
 */
class UpdateRegistryRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     RegistryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
