<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentArn
 * @property string $contentId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 */
class ContentReference extends Shape
{
    /**
     * @param array{
     *     contentArn?: string,
     *     contentId?: string,
     *     knowledgeBaseArn?: string,
     *     knowledgeBaseId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
