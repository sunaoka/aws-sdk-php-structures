<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotebooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property string $domainId
 * @property 'ACTIVE'|'ARCHIVED' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class NotebookSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     owningProjectId: string,
     *     domainId: string,
     *     status: 'ACTIVE'|'ARCHIVED',
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
