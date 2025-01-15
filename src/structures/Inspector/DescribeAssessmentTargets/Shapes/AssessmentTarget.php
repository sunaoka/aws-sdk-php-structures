<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string|null $resourceGroupArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AssessmentTarget extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     resourceGroupArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
