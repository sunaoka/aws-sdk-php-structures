<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $id
 * @property string $typeName
 * @property string|null $typeRevision
 * @property string|null $sourceIdentifier
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property list<FormOutput>|null $formsOutput
 * @property list<string>|null $upstreamLineageNodeIds
 * @property list<string>|null $downstreamLineageNodeIds
 */
class LineageNodeItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     id: string,
     *     typeName: string,
     *     typeRevision?: string|null,
     *     sourceIdentifier?: string|null,
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     formsOutput?: list<FormOutput>|null,
     *     upstreamLineageNodeIds?: list<string>|null,
     *     downstreamLineageNodeIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
