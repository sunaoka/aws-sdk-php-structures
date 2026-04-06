<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property 'INCLUDE'|'EXCLUDE'|null $inclusion
 */
class QueryGenerationColumn extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     inclusion?: 'INCLUDE'|'EXCLUDE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
