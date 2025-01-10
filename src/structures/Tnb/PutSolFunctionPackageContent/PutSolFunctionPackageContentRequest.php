<?php

namespace Sunaoka\Aws\Structures\Tnb\PutSolFunctionPackageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'application/zip' $contentType
 * @property string|resource|\Psr\Http\Message\StreamInterface $file
 * @property string $vnfPkgId
 */
class PutSolFunctionPackageContentRequest extends Request
{
    /**
     * @param array{
     *     contentType?: 'application/zip',
     *     file: string|resource|\Psr\Http\Message\StreamInterface,
     *     vnfPkgId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
