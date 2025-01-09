<?php

namespace Sunaoka\Aws\Structures\DynamoDb\EnableKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TableName
 * @property string $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING' $DestinationStatus
 * @property Shapes\EnableKinesisStreamingConfiguration $EnableKinesisStreamingConfiguration
 */
class EnableKinesisStreamingDestinationResponse extends Response
{
}
