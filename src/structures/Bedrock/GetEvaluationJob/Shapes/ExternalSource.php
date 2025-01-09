<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'BYTE_CONTENT' $sourceType
 * @property S3ObjectDoc $s3Location
 * @property ByteContentDoc $byteContent
 */
class ExternalSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'S3'|'BYTE_CONTENT',
     *     s3Location?: S3ObjectDoc,
     *     byteContent?: ByteContentDoc
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
