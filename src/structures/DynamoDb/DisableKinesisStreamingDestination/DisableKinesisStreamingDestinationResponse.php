<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DisableKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TableName
 * @property string $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING' $DestinationStatus
 * @property Shapes\EnableKinesisStreamingConfiguration $EnableKinesisStreamingConfiguration
 */
class DisableKinesisStreamingDestinationResponse extends Response
{
}
