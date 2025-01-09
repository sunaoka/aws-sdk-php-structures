<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vnfPkgId
 */
class GetSolFunctionPackageRequest extends Request
{
    /**
     * @param array{vnfPkgId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
