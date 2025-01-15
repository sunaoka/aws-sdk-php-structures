<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListGuardrails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property 'CREATING'|'UPDATING'|'VERSIONING'|'READY'|'FAILED'|'DELETING' $status
 * @property string $name
 * @property string|null $description
 * @property string $version
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GuardrailSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     status: 'CREATING'|'UPDATING'|'VERSIONING'|'READY'|'FAILED'|'DELETING',
     *     name: string,
     *     description?: string|null,
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
