<?php

namespace Sunaoka\Aws\Structures\Tnb\DeleteSolNetworkPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsdInfoId
 */
class DeleteSolNetworkPackageRequest extends Request
{
    /**
     * @param array{nsdInfoId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
