<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'BYTE_CONTENT' $sourceType
 * @property S3ObjectDoc|null $s3Location
 * @property ByteContentDoc|null $byteContent
 */
class ExternalSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'S3'|'BYTE_CONTENT',
     *     s3Location?: S3ObjectDoc|null,
     *     byteContent?: ByteContentDoc|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
