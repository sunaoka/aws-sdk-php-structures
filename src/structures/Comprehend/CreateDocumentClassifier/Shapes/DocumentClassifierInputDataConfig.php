<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDocumentClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST' $DataFormat
 * @property string $S3Uri
 * @property string $TestS3Uri
 * @property string $LabelDelimiter
 * @property list<AugmentedManifestsListItem> $AugmentedManifests
 * @property 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT' $DocumentType
 * @property DocumentClassifierDocuments $Documents
 * @property DocumentReaderConfig $DocumentReaderConfig
 */
class DocumentClassifierInputDataConfig extends Shape
{
    /**
     * @param array{
     *     DataFormat?: 'COMPREHEND_CSV'|'AUGMENTED_MANIFEST',
     *     S3Uri?: string,
     *     TestS3Uri?: string,
     *     LabelDelimiter?: string,
     *     AugmentedManifests?: list<AugmentedManifestsListItem>,
     *     DocumentType?: 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT',
     *     Documents?: DocumentClassifierDocuments,
     *     DocumentReaderConfig?: DocumentReaderConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
