<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUsedAt
 * @property string $name
 */
class ServiceAccountTokenSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     expiresAt: \Aws\Api\DateTimeResult,
     *     id: string,
     *     lastUsedAt?: \Aws\Api\DateTimeResult|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
