<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagFilter|null $contentTagFilter
 * @property int<1, 100>|null $maxResults
 * @property 'HYBRID'|'SEMANTIC'|null $overrideKnowledgeBaseSearchType
 */
class KnowledgeBaseAssociationConfigurationData extends Shape
{
    /**
     * @param array{
     *     contentTagFilter?: TagFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     overrideKnowledgeBaseSearchType?: 'HYBRID'|'SEMANTIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
