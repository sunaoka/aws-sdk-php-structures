<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentArn
 * @property string $contentId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property 'WEB_CRAWLER'|'KNOWLEDGE_BASE' $referenceType
 * @property string $sourceURL
 */
class ContentReference extends Shape
{
    /**
     * @param array{
     *     contentArn?: string,
     *     contentId?: string,
     *     knowledgeBaseArn?: string,
     *     knowledgeBaseId?: string,
     *     referenceType?: 'WEB_CRAWLER'|'KNOWLEDGE_BASE',
     *     sourceURL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
