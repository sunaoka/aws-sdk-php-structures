<?php

namespace Sunaoka\Aws\Structures\Glue\CreateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistryName
 * @property string $Description
 * @property array<string, string> $Tags
 */
class CreateRegistryRequest extends Request
{
    /**
     * @param array{
     *     RegistryName: string,
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
