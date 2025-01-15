<?php

namespace Sunaoka\Aws\Structures\Glue\CreateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateRegistryRequest extends Request
{
    /**
     * @param array{
     *     RegistryName: string,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
