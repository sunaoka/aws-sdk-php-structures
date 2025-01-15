<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST'|null $DataFormat
 * @property string|null $S3Uri
 * @property string|null $TestS3Uri
 * @property string|null $LabelDelimiter
 * @property list<AugmentedManifestsListItem>|null $AugmentedManifests
 * @property 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT'|null $DocumentType
 * @property DocumentClassifierDocuments|null $Documents
 * @property DocumentReaderConfig|null $DocumentReaderConfig
 */
class DocumentClassifierInputDataConfig extends Shape
{
    /**
     * @param array{
     *     DataFormat?: 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST'|null,
     *     S3Uri?: string|null,
     *     TestS3Uri?: string|null,
     *     LabelDelimiter?: string|null,
     *     AugmentedManifests?: list<AugmentedManifestsListItem>|null,
     *     DocumentType?: 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT'|null,
     *     Documents?: DocumentClassifierDocuments|null,
     *     DocumentReaderConfig?: DocumentReaderConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
