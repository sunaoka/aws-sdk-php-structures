<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AttributeNames
 * @property string $S3Uri
 * @property string $AnnotationDataS3Uri
 * @property string $SourceDocumentsS3Uri
 * @property 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT' $DocumentType
 */
class DatasetAugmentedManifestsListItem extends Shape
{
    /**
     * @param array{
     *     AttributeNames: list<string>,
     *     S3Uri: string,
     *     AnnotationDataS3Uri?: string,
     *     SourceDocumentsS3Uri?: string,
     *     DocumentType?: 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
