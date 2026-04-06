<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property 'INCLUDE'|'EXCLUDE'|null $inclusion
 * @property string|null $name
 */
class QueryGenerationColumn extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     inclusion?: 'INCLUDE'|'EXCLUDE'|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
