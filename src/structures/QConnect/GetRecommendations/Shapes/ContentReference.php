<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $knowledgeBaseArn
 * @property string|null $knowledgeBaseId
 * @property string|null $contentArn
 * @property string|null $contentId
 * @property string|null $sourceURL
 * @property 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|'BEDROCK_KB_S3'|'BEDROCK_KB_WEB'|'BEDROCK_KB_CONFLUENCE'|'BEDROCK_KB_SALESFORCE'|'BEDROCK_KB_SHAREPOINT'|'BEDROCK_KB_KENDRA'|'BEDROCK_KB_CUSTOM_DOCUMENT'|'BEDROCK_KB_SQL'|null $referenceType
 */
class ContentReference extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseArn?: string|null,
     *     knowledgeBaseId?: string|null,
     *     contentArn?: string|null,
     *     contentId?: string|null,
     *     sourceURL?: string|null,
     *     referenceType?: 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|'BEDROCK_KB_S3'|'BEDROCK_KB_WEB'|'BEDROCK_KB_CONFLUENCE'|'BEDROCK_KB_SALESFORCE'|'BEDROCK_KB_SHAREPOINT'|'BEDROCK_KB_KENDRA'|'BEDROCK_KB_CUSTOM_DOCUMENT'|'BEDROCK_KB_SQL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
