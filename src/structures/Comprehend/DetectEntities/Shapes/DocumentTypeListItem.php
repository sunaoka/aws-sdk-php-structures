<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Page
 * @property 'NATIVE_PDF'|'SCANNED_PDF'|'MS_WORD'|'IMAGE'|'PLAIN_TEXT'|'TEXTRACT_DETECT_DOCUMENT_TEXT_JSON'|'TEXTRACT_ANALYZE_DOCUMENT_JSON'|null $Type
 */
class DocumentTypeListItem extends Shape
{
    /**
     * @param array{
     *     Page?: int|null,
     *     Type?: 'NATIVE_PDF'|'SCANNED_PDF'|'MS_WORD'|'IMAGE'|'PLAIN_TEXT'|'TEXTRACT_DETECT_DOCUMENT_TEXT_JSON'|'TEXTRACT_ANALYZE_DOCUMENT_JSON'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
