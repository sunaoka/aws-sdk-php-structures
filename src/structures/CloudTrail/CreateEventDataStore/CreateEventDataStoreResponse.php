<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateEventDataStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventDataStoreArn
 * @property string $Name
 * @property 'CREATED'|'ENABLED'|'PENDING_DELETION'|'STARTING_INGESTION'|'STOPPING_INGESTION'|'STOPPED_INGESTION' $Status
 * @property list<Shapes\AdvancedEventSelector> $AdvancedEventSelectors
 * @property bool $MultiRegionEnabled
 * @property bool $OrganizationEnabled
 * @property int<7, 3653> $RetentionPeriod
 * @property bool $TerminationProtectionEnabled
 * @property list<Shapes\Tag> $TagsList
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property string $KmsKeyId
 * @property 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING' $BillingMode
 */
class CreateEventDataStoreResponse extends Response
{
}
