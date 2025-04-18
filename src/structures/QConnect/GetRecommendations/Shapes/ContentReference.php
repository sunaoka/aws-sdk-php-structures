<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $knowledgeBaseArn
 * @property string|null $knowledgeBaseId
 * @property string|null $contentArn
 * @property string|null $contentId
 * @property string|null $sourceURL
 * @property 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|null $referenceType
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
     *     referenceType?: 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
