<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxDataview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $dataviewName
 * @property string $databaseName
 * @property string $environmentId
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property string $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration> $segmentConfigurations
 * @property string $description
 * @property bool $autoUpdate
 * @property bool $readWrite
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|'DELETING' $status
 */
class CreateKxDataviewResponse extends Response
{
}
