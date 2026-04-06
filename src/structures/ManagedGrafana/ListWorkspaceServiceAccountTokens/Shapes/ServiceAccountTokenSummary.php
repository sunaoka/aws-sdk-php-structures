<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property \Aws\Api\DateTimeResult|null $lastUsedAt
 */
class ServiceAccountTokenSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     expiresAt: \Aws\Api\DateTimeResult,
     *     lastUsedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
