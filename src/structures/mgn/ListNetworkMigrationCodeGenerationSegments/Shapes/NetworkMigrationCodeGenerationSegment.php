<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationCodeGenerationSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobID
 * @property string|null $networkMigrationExecutionID
 * @property string|null $networkMigrationDefinitionID
 * @property string|null $segmentID
 * @property 'WORKLOAD'|'APPLIANCE'|'NETWORK'|null $segmentType
 * @property string|null $logicalID
 * @property string|null $mapperSegmentID
 * @property list<NetworkMigrationCodeGenerationArtifact>|null $artifacts
 * @property list<string>|null $referencedSegments
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class NetworkMigrationCodeGenerationSegment extends Shape
{
    /**
     * @param array{
     *     jobID?: string|null,
     *     networkMigrationExecutionID?: string|null,
     *     networkMigrationDefinitionID?: string|null,
     *     segmentID?: string|null,
     *     segmentType?: 'WORKLOAD'|'APPLIANCE'|'NETWORK'|null,
     *     logicalID?: string|null,
     *     mapperSegmentID?: string|null,
     *     artifacts?: list<NetworkMigrationCodeGenerationArtifact>|null,
     *     referencedSegments?: list<string>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
