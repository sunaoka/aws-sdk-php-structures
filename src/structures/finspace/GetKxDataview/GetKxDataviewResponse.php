<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDataview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $databaseName
 * @property string|null $dataviewName
 * @property 'SINGLE'|'MULTI'|null $azMode
 * @property string|null $availabilityZoneId
 * @property string|null $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration>|null $segmentConfigurations
 * @property list<Shapes\KxDataviewActiveVersion>|null $activeVersions
 * @property string|null $description
 * @property bool|null $autoUpdate
 * @property bool|null $readWrite
 * @property string|null $environmentId
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING'|null $status
 * @property string|null $statusReason
 */
class GetKxDataviewResponse extends Response
{
}
