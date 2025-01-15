<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDocumentClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $KmsKeyId
 */
class OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
