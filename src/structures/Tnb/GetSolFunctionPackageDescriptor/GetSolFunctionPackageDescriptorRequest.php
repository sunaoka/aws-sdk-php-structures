<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackageDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'text/plain' $accept
 * @property string $vnfPkgId
 */
class GetSolFunctionPackageDescriptorRequest extends Request
{
    /**
     * @param array{
     *     accept: 'text/plain',
     *     vnfPkgId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
