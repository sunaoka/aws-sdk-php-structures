<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $TestS3Uri
 */
class EntityRecognizerAnnotations extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     TestS3Uri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
