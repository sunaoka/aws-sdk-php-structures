<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackageDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nsdInfoId
 */
class GetSolNetworkPackageDescriptorRequest extends Request
{
    /**
     * @param array{nsdInfoId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
