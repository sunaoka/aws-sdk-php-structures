<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $TestS3Uri
 * @property 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE'|null $InputFormat
 */
class EntityRecognizerDocuments extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     TestS3Uri?: string|null,
     *     InputFormat?: 'ONE_DOC_PER_FILE'|'ONE_DOC_PER_LINE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
