<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'BYTE_CONTENT' $sourceType
 * @property S3ObjectFile|null $s3Location
 * @property ByteContentFile|null $byteContent
 */
class FileSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'S3'|'BYTE_CONTENT',
     *     s3Location?: S3ObjectFile|null,
     *     byteContent?: ByteContentFile|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
