<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contentArn
 * @property string|null $contentId
 * @property string|null $knowledgeBaseArn
 * @property string|null $knowledgeBaseId
 */
class ContentReference extends Shape
{
    /**
     * @param array{
     *     contentArn?: string|null,
     *     contentId?: string|null,
     *     knowledgeBaseArn?: string|null,
     *     knowledgeBaseId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
