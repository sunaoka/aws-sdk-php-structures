<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDocumentIdentifier $customDocumentIdentifier
 * @property 'IN_LINE'|'S3_LOCATION' $sourceType
 * @property CustomS3Location|null $s3Location
 * @property InlineContent|null $inlineContent
 */
class CustomContent extends Shape
{
    /**
     * @param array{
     *     customDocumentIdentifier: CustomDocumentIdentifier,
     *     sourceType: 'IN_LINE'|'S3_LOCATION',
     *     s3Location?: CustomS3Location|null,
     *     inlineContent?: InlineContent|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
