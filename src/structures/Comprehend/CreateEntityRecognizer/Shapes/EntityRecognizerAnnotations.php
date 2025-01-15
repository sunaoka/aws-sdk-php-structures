<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $TestS3Uri
 */
class EntityRecognizerAnnotations extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     TestS3Uri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
