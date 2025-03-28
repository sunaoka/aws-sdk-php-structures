<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $RegistryName
 * @property array<string, string>|null $Tags
 */
class CreateRegistryRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     RegistryName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
