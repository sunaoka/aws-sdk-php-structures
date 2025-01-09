<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventDataStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventDataStoreArn
 * @property string $Name
 * @property 'CREATED'|'ENABLED'|'PENDING_DELETION'|'STARTING_INGESTION'|'STOPPING_INGESTION'|'STOPPED_INGESTION' $Status
 * @property list<Shapes\AdvancedEventSelector> $AdvancedEventSelectors
 * @property bool $MultiRegionEnabled
 * @property bool $OrganizationEnabled
 * @property int $RetentionPeriod
 * @property bool $TerminationProtectionEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property string $KmsKeyId
 * @property 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING' $BillingMode
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED' $FederationStatus
 * @property string $FederationRoleArn
 * @property list<Shapes\PartitionKey> $PartitionKeys
 */
class GetEventDataStoreResponse extends Response
{
}
