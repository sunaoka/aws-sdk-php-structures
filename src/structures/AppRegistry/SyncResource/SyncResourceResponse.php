<?php

namespace Sunaoka\Aws\Structures\AppRegistry\SyncResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationArn
 * @property string $resourceArn
 * @property 'START_SYNC'|'NO_ACTION' $actionTaken
 */
class SyncResourceResponse extends Response
{
}
