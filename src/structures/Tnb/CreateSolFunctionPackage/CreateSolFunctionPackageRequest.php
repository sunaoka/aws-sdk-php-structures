<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolFunctionPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $tags
 */
class CreateSolFunctionPackageRequest extends Request
{
    /**
     * @param array{tags?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
