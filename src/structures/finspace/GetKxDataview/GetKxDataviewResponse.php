<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDataview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $databaseName
 * @property string $dataviewName
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property string $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration> $segmentConfigurations
 * @property list<Shapes\KxDataviewActiveVersion> $activeVersions
 * @property string $description
 * @property bool $autoUpdate
 * @property bool $readWrite
 * @property string $environmentId
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING' $status
 * @property string $statusReason
 */
class GetKxDataviewResponse extends Response
{
}
