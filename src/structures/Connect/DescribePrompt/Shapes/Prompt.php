<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PromptARN
 * @property string $PromptId
 * @property string $Name
 * @property string $Description
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class Prompt extends Shape
{
    /**
     * @param array{
     *     PromptARN?: string,
     *     PromptId?: string,
     *     Name?: string,
     *     Description?: string,
     *     Tags?: array<string, string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
