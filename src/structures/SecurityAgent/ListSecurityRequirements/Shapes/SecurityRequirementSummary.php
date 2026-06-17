<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListSecurityRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packId
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class SecurityRequirementSummary extends Shape
{
    /**
     * @param array{
     *     packId: string,
     *     name: string,
     *     description: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
