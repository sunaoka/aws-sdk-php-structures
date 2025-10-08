<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Content $content
 * @property 'ASSISTANT'|'USER'|'TOOL'|'OTHER' $role
 */
class Conversational extends Shape
{
    /**
     * @param array{
     *     content: Content,
     *     role: 'ASSISTANT'|'USER'|'TOOL'|'OTHER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
