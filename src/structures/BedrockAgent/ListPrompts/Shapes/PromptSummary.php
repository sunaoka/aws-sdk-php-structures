<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListPrompts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $id
 * @property string $arn
 * @property string $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PromptSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     id: string,
     *     arn: string,
     *     version: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
