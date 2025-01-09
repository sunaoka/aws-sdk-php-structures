<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateApiDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApiDestinationArn
 * @property 'ACTIVE'|'INACTIVE' $ApiDestinationState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class CreateApiDestinationResponse extends Response
{
}
