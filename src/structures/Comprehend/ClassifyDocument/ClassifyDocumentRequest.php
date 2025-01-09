<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 * @property string $EndpointArn
 * @property string $Bytes
 * @property Shapes\DocumentReaderConfig $DocumentReaderConfig
 */
class ClassifyDocumentRequest extends Request
{
    /**
     * @param array{
     *     Text?: string,
     *     EndpointArn: string,
     *     Bytes?: string,
     *     DocumentReaderConfig?: Shapes\DocumentReaderConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
