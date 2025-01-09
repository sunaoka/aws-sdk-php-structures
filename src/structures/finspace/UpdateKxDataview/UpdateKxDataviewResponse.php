<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxDataview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property string $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration> $segmentConfigurations
 * @property list<Shapes\KxDataviewActiveVersion> $activeVersions
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING' $status
 * @property bool $autoUpdate
 * @property bool $readWrite
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 */
class UpdateKxDataviewResponse extends Response
{
}
