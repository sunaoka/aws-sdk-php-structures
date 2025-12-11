<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contentId
 * @property string|null $title
 * @property string|null $knowledgeBaseId
 * @property CitationSpan $citationSpan
 * @property string|null $sourceURL
 * @property 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|'BEDROCK_KB_S3'|'BEDROCK_KB_WEB'|'BEDROCK_KB_CONFLUENCE'|'BEDROCK_KB_SALESFORCE'|'BEDROCK_KB_SHAREPOINT'|'BEDROCK_KB_KENDRA'|'BEDROCK_KB_CUSTOM_DOCUMENT'|'BEDROCK_KB_SQL' $referenceType
 */
class Citation extends Shape
{
    /**
     * @param array{
     *     contentId?: string|null,
     *     title?: string|null,
     *     knowledgeBaseId?: string|null,
     *     citationSpan: CitationSpan,
     *     sourceURL?: string|null,
     *     referenceType: 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|'BEDROCK_KB_S3'|'BEDROCK_KB_WEB'|'BEDROCK_KB_CONFLUENCE'|'BEDROCK_KB_SALESFORCE'|'BEDROCK_KB_SHAREPOINT'|'BEDROCK_KB_KENDRA'|'BEDROCK_KB_CUSTOM_DOCUMENT'|'BEDROCK_KB_SQL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
