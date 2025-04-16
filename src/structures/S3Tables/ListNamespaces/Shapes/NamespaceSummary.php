<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $namespace
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $ownerAccountId
 * @property string|null $namespaceId
 * @property string|null $tableBucketId
 */
class NamespaceSummary extends Shape
{
    /**
     * @param array{
     *     namespace: list<string>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     ownerAccountId: string,
     *     namespaceId?: string|null,
     *     tableBucketId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
