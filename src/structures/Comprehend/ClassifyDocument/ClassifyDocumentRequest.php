<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 * @property string $EndpointArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Bytes
 * @property Shapes\DocumentReaderConfig $DocumentReaderConfig
 */
class ClassifyDocumentRequest extends Request
{
    /**
     * @param array{
     *     Text?: string,
     *     EndpointArn: string,
     *     Bytes?: string|resource|\Psr\Http\Message\StreamInterface,
     *     DocumentReaderConfig?: Shapes\DocumentReaderConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
