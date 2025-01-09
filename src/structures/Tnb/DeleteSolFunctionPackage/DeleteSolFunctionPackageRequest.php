<?php

namespace Sunaoka\Aws\Structures\Tnb\DeleteSolFunctionPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vnfPkgId
 */
class DeleteSolFunctionPackageRequest extends Request
{
    /**
     * @param array{vnfPkgId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
