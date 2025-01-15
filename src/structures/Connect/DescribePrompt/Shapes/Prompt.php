<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PromptARN
 * @property string|null $PromptId
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class Prompt extends Shape
{
    /**
     * @param array{
     *     PromptARN?: string|null,
     *     PromptId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
