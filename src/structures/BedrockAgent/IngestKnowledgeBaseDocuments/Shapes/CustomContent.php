<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDocumentIdentifier $customDocumentIdentifier
 * @property InlineContent $inlineContent
 * @property CustomS3Location $s3Location
 * @property 'IN_LINE'|'S3_LOCATION' $sourceType
 */
class CustomContent extends Shape
{
    /**
     * @param array{
     *     customDocumentIdentifier: CustomDocumentIdentifier,
     *     inlineContent?: InlineContent,
     *     s3Location?: CustomS3Location,
     *     sourceType: 'IN_LINE'|'S3_LOCATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
