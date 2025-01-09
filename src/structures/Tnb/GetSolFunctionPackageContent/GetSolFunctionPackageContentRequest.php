<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'application/zip' $accept
 * @property string $vnfPkgId
 */
class GetSolFunctionPackageContentRequest extends Request
{
    /**
     * @param array{
     *     accept: 'application/zip',
     *     vnfPkgId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
