<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $naturalLanguage
 * @property string $sql
 */
class CuratedQuery extends Shape
{
    /**
     * @param array{
     *     naturalLanguage: string,
     *     sql: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
