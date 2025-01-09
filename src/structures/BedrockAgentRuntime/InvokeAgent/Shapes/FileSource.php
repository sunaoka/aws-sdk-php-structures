<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteContentFile $byteContent
 * @property S3ObjectFile $s3Location
 * @property 'S3'|'BYTE_CONTENT' $sourceType
 */
class FileSource extends Shape
{
    /**
     * @param array{
     *     byteContent?: ByteContentFile,
     *     s3Location?: S3ObjectFile,
     *     sourceType: 'S3'|'BYTE_CONTENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
