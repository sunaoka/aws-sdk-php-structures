<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateApiDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApiDestinationArn
 * @property 'ACTIVE'|'INACTIVE' $ApiDestinationState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class UpdateApiDestinationResponse extends Response
{
}
