<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TableName
 * @property string|null $StreamArn
 * @property 'ENABLING'|'ACTIVE'|'DISABLING'|'DISABLED'|'ENABLE_FAILED'|'UPDATING'|null $DestinationStatus
 * @property Shapes\UpdateKinesisStreamingConfiguration|null $UpdateKinesisStreamingConfiguration
 */
class UpdateKinesisStreamingDestinationResponse extends Response
{
}
