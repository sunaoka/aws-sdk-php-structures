<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateChatResponseConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $responseLength
 * @property string|null $targetAudience
 * @property string|null $perspective
 * @property string|null $outputStyle
 * @property string|null $identity
 * @property string|null $tone
 * @property string|null $customInstructions
 * @property string|null $examples
 */
class InstructionCollection extends Shape
{
    /**
     * @param array{
     *     responseLength?: string|null,
     *     targetAudience?: string|null,
     *     perspective?: string|null,
     *     outputStyle?: string|null,
     *     identity?: string|null,
     *     tone?: string|null,
     *     customInstructions?: string|null,
     *     examples?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
