<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageNodeHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property string $id
 * @property string|null $name
 * @property string|null $sourceIdentifier
 * @property string $typeName
 * @property string|null $typeRevision
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class LineageNodeSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     domainId: string,
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     id: string,
     *     name?: string|null,
     *     sourceIdentifier?: string|null,
     *     typeName: string,
     *     typeRevision?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
