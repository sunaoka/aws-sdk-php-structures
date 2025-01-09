<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $RegistryName
 * @property array<string, string> $Tags
 */
class CreateRegistryRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     RegistryName: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
