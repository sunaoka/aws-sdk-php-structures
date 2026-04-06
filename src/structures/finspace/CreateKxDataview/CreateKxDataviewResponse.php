<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxDataview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $dataviewName
 * @property string|null $databaseName
 * @property string|null $environmentId
 * @property 'SINGLE'|'MULTI'|null $azMode
 * @property string|null $availabilityZoneId
 * @property string|null $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration>|null $segmentConfigurations
 * @property string|null $description
 * @property bool|null $autoUpdate
 * @property bool|null $readWrite
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING'|null $status
 */
class CreateKxDataviewResponse extends Response
{
}
