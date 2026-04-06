<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateEventDataStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventDataStoreArn
 * @property string|null $Name
 * @property 'CREATED'|'ENABLED'|'PENDING_DELETION'|'STARTING_INGESTION'|'STOPPING_INGESTION'|'STOPPED_INGESTION'|null $Status
 * @property list<Shapes\AdvancedEventSelector>|null $AdvancedEventSelectors
 * @property bool|null $MultiRegionEnabled
 * @property bool|null $OrganizationEnabled
 * @property int<7, 3653>|null $RetentionPeriod
 * @property bool|null $TerminationProtectionEnabled
 * @property list<Shapes\Tag>|null $TagsList
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property string|null $KmsKeyId
 * @property 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING'|null $BillingMode
 */
class CreateEventDataStoreResponse extends Response
{
}
