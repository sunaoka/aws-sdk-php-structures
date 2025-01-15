<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListPrompts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $version
 */
class PromptSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     id: string,
     *     name: string,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
