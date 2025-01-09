<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageNodeHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property string $id
 * @property string $name
 * @property string $sourceIdentifier
 * @property string $typeName
 * @property string $typeRevision
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class LineageNodeSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     description?: string,
     *     domainId: string,
     *     eventTimestamp?: \Aws\Api\DateTimeResult,
     *     id: string,
     *     name?: string,
     *     sourceIdentifier?: string,
     *     typeName: string,
     *     typeRevision?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
