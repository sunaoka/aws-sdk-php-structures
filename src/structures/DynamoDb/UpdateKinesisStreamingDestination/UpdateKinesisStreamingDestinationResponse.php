<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TableName
 * @property string $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING' $DestinationStatus
 * @property Shapes\UpdateKinesisStreamingConfiguration $UpdateKinesisStreamingConfiguration
 */
class UpdateKinesisStreamingDestinationResponse extends Response
{
}
