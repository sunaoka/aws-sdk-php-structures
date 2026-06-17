<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetSecurityRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packId
 * @property string $name
 * @property string $description
 * @property string $domain
 * @property string $evaluation
 * @property string|null $remediation
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class BatchGetSecurityRequirementResult extends Shape
{
    /**
     * @param array{
     *     packId: string,
     *     name: string,
     *     description: string,
     *     domain: string,
     *     evaluation: string,
     *     remediation?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
