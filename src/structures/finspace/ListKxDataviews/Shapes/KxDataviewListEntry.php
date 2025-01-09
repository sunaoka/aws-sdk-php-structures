<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDataviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property string $changesetId
 * @property list<KxDataviewSegmentConfiguration> $segmentConfigurations
 * @property list<KxDataviewActiveVersion> $activeVersions
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING' $status
 * @property string $description
 * @property bool $autoUpdate
 * @property bool $readWrite
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property string $statusReason
 */
class KxDataviewListEntry extends Shape
{
    /**
     * @param array{
     *     environmentId?: string,
     *     databaseName?: string,
     *     dataviewName?: string,
     *     azMode?: 'SINGLE'|'MULTI',
     *     availabilityZoneId?: string,
     *     changesetId?: string,
     *     segmentConfigurations?: list<KxDataviewSegmentConfiguration>,
     *     activeVersions?: list<KxDataviewActiveVersion>,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING',
     *     description?: string,
     *     autoUpdate?: bool,
     *     readWrite?: bool,
     *     createdTimestamp?: \Aws\Api\DateTimeResult,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
