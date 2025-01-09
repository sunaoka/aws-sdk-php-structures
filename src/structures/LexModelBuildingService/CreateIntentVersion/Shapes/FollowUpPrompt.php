<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateIntentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Prompt $prompt
 * @property Statement $rejectionStatement
 */
class FollowUpPrompt extends Shape
{
    /**
     * @param array{
     *     prompt: Prompt,
     *     rejectionStatement: Statement
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
