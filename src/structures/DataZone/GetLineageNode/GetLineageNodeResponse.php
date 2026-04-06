<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\FormOutput>|null $formsOutput
 * @property list<Shapes\LineageNodeReference>|null $upstreamNodes
 * @property list<Shapes\LineageNodeReference>|null $downstreamNodes
 */
class GetLineageNodeResponse extends Response
{
}
