<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contentArn
 * @property string|null $contentId
 * @property string|null $knowledgeBaseArn
 * @property string|null $knowledgeBaseId
 * @property 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|null $referenceType
 * @property string|null $sourceURL
 */
class ContentReference extends Shape
{
    /**
     * @param array{
     *     contentArn?: string|null,
     *     contentId?: string|null,
     *     knowledgeBaseArn?: string|null,
     *     knowledgeBaseId?: string|null,
     *     referenceType?: 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|null,
     *     sourceURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
