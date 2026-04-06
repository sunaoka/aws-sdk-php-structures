<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DisableKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TableName
 * @property string|null $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING'|null $DestinationStatus
 * @property Shapes\EnableKinesisStreamingConfiguration|null $EnableKinesisStreamingConfiguration
 */
class DisableKinesisStreamingDestinationResponse extends Response
{
}
