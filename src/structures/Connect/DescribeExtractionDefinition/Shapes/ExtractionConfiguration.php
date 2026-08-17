<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeExtractionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PromptHint
 * @property ExtractionDefinitionNotFoundBehavior|null $NotFoundBehavior
 */
class ExtractionConfiguration extends Shape
{
    /**
     * @param array{
     *     PromptHint: string,
     *     NotFoundBehavior?: ExtractionDefinitionNotFoundBehavior|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
