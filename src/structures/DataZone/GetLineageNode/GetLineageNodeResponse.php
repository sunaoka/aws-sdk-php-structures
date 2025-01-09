<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property list<Shapes\LineageNodeReference> $downstreamNodes
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property list<Shapes\FormOutput> $formsOutput
 * @property string $id
 * @property string $name
 * @property string $sourceIdentifier
 * @property string $typeName
 * @property string $typeRevision
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property list<Shapes\LineageNodeReference> $upstreamNodes
 */
class GetLineageNodeResponse extends Response
{
}
