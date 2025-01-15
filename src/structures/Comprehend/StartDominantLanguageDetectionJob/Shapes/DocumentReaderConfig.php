<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDominantLanguageDetectionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXTRACT_DETECT_DOCUMENT_TEXT'|'TEXTRACT_ANALYZE_DOCUMENT' $DocumentReadAction
 * @property 'SERVICE_DEFAULT'|'FORCE_DOCUMENT_READ_ACTION'|null $DocumentReadMode
 * @property list<'TABLES'|'FORMS'>|null $FeatureTypes
 */
class DocumentReaderConfig extends Shape
{
    /**
     * @param array{
     *     DocumentReadAction: 'TEXTRACT_DETECT_DOCUMENT_TEXT'|'TEXTRACT_ANALYZE_DOCUMENT',
     *     DocumentReadMode?: 'SERVICE_DEFAULT'|'FORCE_DOCUMENT_READ_ACTION'|null,
     *     FeatureTypes?: list<'TABLES'|'FORMS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
