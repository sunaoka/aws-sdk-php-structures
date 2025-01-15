<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Text
 * @property string $EndpointArn
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Bytes
 * @property Shapes\DocumentReaderConfig|null $DocumentReaderConfig
 */
class ClassifyDocumentRequest extends Request
{
    /**
     * @param array{
     *     Text?: string|null,
     *     EndpointArn: string,
     *     Bytes?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     DocumentReaderConfig?: Shapes\DocumentReaderConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
