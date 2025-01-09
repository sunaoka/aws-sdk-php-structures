<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartEventsDetectionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXTRACT_DETECT_DOCUMENT_TEXT'|'TEXTRACT_ANALYZE_DOCUMENT' $DocumentReadAction
 * @property 'SERVICE_DEFAULT'|'FORCE_DOCUMENT_READ_ACTION' $DocumentReadMode
 * @property list<'TABLES'|'FORMS'> $FeatureTypes
 */
class DocumentReaderConfig extends Shape
{
    /**
     * @param array{
     *     DocumentReadAction: 'TEXTRACT_DETECT_DOCUMENT_TEXT'|'TEXTRACT_ANALYZE_DOCUMENT',
     *     DocumentReadMode?: 'SERVICE_DEFAULT'|'FORCE_DOCUMENT_READ_ACTION',
     *     FeatureTypes?: list<'TABLES'|'FORMS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
