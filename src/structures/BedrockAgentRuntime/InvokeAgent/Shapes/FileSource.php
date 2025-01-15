<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteContentFile|null $byteContent
 * @property S3ObjectFile|null $s3Location
 * @property 'S3'|'BYTE_CONTENT' $sourceType
 */
class FileSource extends Shape
{
    /**
     * @param array{
     *     byteContent?: ByteContentFile|null,
     *     s3Location?: S3ObjectFile|null,
     *     sourceType: 'S3'|'BYTE_CONTENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
