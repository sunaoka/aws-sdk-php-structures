<?php

namespace Sunaoka\Aws\Structures\Tnb\PutSolNetworkPackageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'application/zip' $contentType
 * @property string $file
 * @property string $nsdInfoId
 */
class PutSolNetworkPackageContentRequest extends Request
{
    /**
     * @param array{
     *     contentType?: 'application/zip',
     *     file: string,
     *     nsdInfoId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
