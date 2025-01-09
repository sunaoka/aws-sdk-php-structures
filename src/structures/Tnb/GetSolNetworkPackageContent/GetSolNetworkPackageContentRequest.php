<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'application/zip' $accept
 * @property string $nsdInfoId
 */
class GetSolNetworkPackageContentRequest extends Request
{
    /**
     * @param array{
     *     accept: 'application/zip',
     *     nsdInfoId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
