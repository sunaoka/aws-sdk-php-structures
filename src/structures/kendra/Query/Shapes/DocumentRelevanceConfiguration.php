<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property Relevance $Relevance
 */
class DocumentRelevanceConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Relevance: Relevance
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
