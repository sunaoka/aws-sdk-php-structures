<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteContentDoc|null $byteContent
 * @property S3ObjectDoc|null $s3Location
 * @property 'S3'|'BYTE_CONTENT' $sourceType
 */
class ExternalSource extends Shape
{
    /**
     * @param array{
     *     byteContent?: ByteContentDoc|null,
     *     s3Location?: S3ObjectDoc|null,
     *     sourceType: 'S3'|'BYTE_CONTENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
