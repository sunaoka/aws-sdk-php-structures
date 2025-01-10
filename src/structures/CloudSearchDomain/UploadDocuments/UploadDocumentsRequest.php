<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\UploadDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $documents
 * @property 'application/json'|'application/xml' $contentType
 */
class UploadDocumentsRequest extends Request
{
    /**
     * @param array{
     *     documents: string|resource|\Psr\Http\Message\StreamInterface,
     *     contentType: 'application/json'|'application/xml'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
