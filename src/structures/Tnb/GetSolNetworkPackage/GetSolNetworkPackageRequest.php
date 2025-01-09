<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsdInfoId
 */
class GetSolNetworkPackageRequest extends Request
{
    /**
     * @param array{nsdInfoId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
