<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property 'INCLUDE'|'EXCLUDE' $inclusion
 * @property string $name
 */
class QueryGenerationColumn extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     inclusion?: 'INCLUDE'|'EXCLUDE',
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
