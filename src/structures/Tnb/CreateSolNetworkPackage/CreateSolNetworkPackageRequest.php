<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolNetworkPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $tags
 */
class CreateSolNetworkPackageRequest extends Request
{
    /**
     * @param array{tags?: array<string, string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
