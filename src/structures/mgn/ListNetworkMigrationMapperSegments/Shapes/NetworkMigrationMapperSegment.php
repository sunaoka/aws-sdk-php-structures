<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobID
 * @property string|null $networkMigrationExecutionID
 * @property string|null $networkMigrationDefinitionID
 * @property string|null $segmentID
 * @property 'WORKLOAD'|'APPLIANCE'|null $segmentType
 * @property string|null $name
 * @property string|null $description
 * @property string|null $logicalID
 * @property Checksum|null $checksum
 * @property S3Configuration|null $outputS3Configuration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property array<string, string>|null $scopeTags
 * @property string|null $targetAccount
 * @property list<string>|null $referencedSegments
 */
class NetworkMigrationMapperSegment extends Shape
{
    /**
     * @param array{
     *     jobID?: string|null,
     *     networkMigrationExecutionID?: string|null,
     *     networkMigrationDefinitionID?: string|null,
     *     segmentID?: string|null,
     *     segmentType?: 'WORKLOAD'|'APPLIANCE'|null,
     *     name?: string|null,
     *     description?: string|null,
     *     logicalID?: string|null,
     *     checksum?: Checksum|null,
     *     outputS3Configuration?: S3Configuration|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     scopeTags?: array<string, string>|null,
     *     targetAccount?: string|null,
     *     referencedSegments?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
