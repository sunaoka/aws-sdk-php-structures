<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $TestS3Uri
 */
class DocumentClassifierDocuments extends Shape
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
