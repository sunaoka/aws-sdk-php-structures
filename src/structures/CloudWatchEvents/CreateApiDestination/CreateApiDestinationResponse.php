<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateApiDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApiDestinationArn
 * @property 'ACTIVE'|'INACTIVE'|null $ApiDestinationState
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class CreateApiDestinationResponse extends Response
{
}
