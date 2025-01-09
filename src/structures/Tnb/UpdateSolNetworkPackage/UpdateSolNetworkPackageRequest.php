<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsdInfoId
 * @property 'ENABLED'|'DISABLED' $nsdOperationalState
 */
class UpdateSolNetworkPackageRequest extends Request
{
    /**
     * @param array{
     *     nsdInfoId: string,
     *     nsdOperationalState: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
