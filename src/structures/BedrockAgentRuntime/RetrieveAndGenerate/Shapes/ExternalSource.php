<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteContentDoc $byteContent
 * @property S3ObjectDoc $s3Location
 * @property 'S3'|'BYTE_CONTENT' $sourceType
 */
class ExternalSource extends Shape
{
    /**
     * @param array{
     *     byteContent?: ByteContentDoc,
     *     s3Location?: S3ObjectDoc,
     *     sourceType: 'S3'|'BYTE_CONTENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
