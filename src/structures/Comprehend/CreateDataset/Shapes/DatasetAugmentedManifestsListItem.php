<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AttributeNames
 * @property string $S3Uri
 * @property string|null $AnnotationDataS3Uri
 * @property string|null $SourceDocumentsS3Uri
 * @property 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT'|null $DocumentType
 */
class DatasetAugmentedManifestsListItem extends Shape
{
    /**
     * @param array{
     *     AttributeNames: list<string>,
     *     S3Uri: string,
     *     AnnotationDataS3Uri?: string|null,
     *     SourceDocumentsS3Uri?: string|null,
     *     DocumentType?: 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
