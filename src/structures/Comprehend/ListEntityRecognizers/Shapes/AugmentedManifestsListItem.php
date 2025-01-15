<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'TRAIN'|'TEST'|null $Split
 * @property list<string> $AttributeNames
 * @property string|null $AnnotationDataS3Uri
 * @property string|null $SourceDocumentsS3Uri
 * @property 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT'|null $DocumentType
 */
class AugmentedManifestsListItem extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     Split?: 'TRAIN'|'TEST'|null,
     *     AttributeNames: list<string>,
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
