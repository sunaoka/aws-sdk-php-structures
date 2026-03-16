<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationMapperSegment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $jobID
 * @property string|null $networkMigrationExecutionID
 * @property string|null $networkMigrationDefinitionID
 * @property string|null $segmentID
 * @property 'WORKLOAD'|'APPLIANCE'|null $segmentType
 * @property string|null $name
 * @property string|null $description
 * @property string|null $logicalID
 * @property Shapes\Checksum|null $checksum
 * @property Shapes\S3Configuration|null $outputS3Configuration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property array<string, string>|null $scopeTags
 * @property string|null $targetAccount
 * @property list<string>|null $referencedSegments
 */
class UpdateNetworkMigrationMapperSegmentResponse extends Response
{
}
