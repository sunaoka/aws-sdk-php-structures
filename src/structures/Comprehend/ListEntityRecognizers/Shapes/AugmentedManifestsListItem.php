<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'TRAIN'|'TEST' $Split
 * @property list<string> $AttributeNames
 * @property string $AnnotationDataS3Uri
 * @property string $SourceDocumentsS3Uri
 * @property 'PLAIN_TEXT_DOCUMENT'|'SEMI_STRUCTURED_DOCUMENT' $DocumentType
 */
class AugmentedManifestsListItem extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     Split?: 'TRAIN'|'TEST',
     *     AttributeNames: list<string>,
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
