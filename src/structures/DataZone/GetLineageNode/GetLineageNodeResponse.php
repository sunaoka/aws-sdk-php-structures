<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property list<Shapes\LineageNodeReference>|null $downstreamNodes
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property list<Shapes\FormOutput>|null $formsOutput
 * @property string $id
 * @property string|null $name
 * @property string|null $sourceIdentifier
 * @property string $typeName
 * @property string|null $typeRevision
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property list<Shapes\LineageNodeReference>|null $upstreamNodes
 */
class GetLineageNodeResponse extends Response
{
}
