<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolFunctionPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|'DISABLED' $operationalState
 * @property string $vnfPkgId
 */
class UpdateSolFunctionPackageRequest extends Request
{
    /**
     * @param array{
     *     operationalState: 'ENABLED'|'DISABLED',
     *     vnfPkgId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
