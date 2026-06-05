<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KnowledgeBaseId
 * @property string $KnowledgeBaseArn
 */
class BatchDeleteKnowledgeBaseSuccess extends Shape
{
    /**
     * @param array{
     *     KnowledgeBaseId: string,
     *     KnowledgeBaseArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
