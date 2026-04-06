<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDataviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentId
 * @property string|null $databaseName
 * @property string|null $dataviewName
 * @property 'SINGLE'|'MULTI'|null $azMode
 * @property string|null $availabilityZoneId
 * @property string|null $changesetId
 * @property list<KxDataviewSegmentConfiguration>|null $segmentConfigurations
 * @property list<KxDataviewActiveVersion>|null $activeVersions
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING'|null $status
 * @property string|null $description
 * @property bool|null $autoUpdate
 * @property bool|null $readWrite
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property string|null $statusReason
 */
class KxDataviewListEntry extends Shape
{
    /**
     * @param array{
     *     environmentId?: string|null,
     *     databaseName?: string|null,
     *     dataviewName?: string|null,
     *     azMode?: 'SINGLE'|'MULTI'|null,
     *     availabilityZoneId?: string|null,
     *     changesetId?: string|null,
     *     segmentConfigurations?: list<KxDataviewSegmentConfiguration>|null,
     *     activeVersions?: list<KxDataviewActiveVersion>|null,
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING'|null,
     *     description?: string|null,
     *     autoUpdate?: bool|null,
     *     readWrite?: bool|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
