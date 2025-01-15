<?php

namespace Sunaoka\Aws\Structures\AppRegistry\SyncResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationArn
 * @property string|null $resourceArn
 * @property 'START_SYNC'|'NO_ACTION'|null $actionTaken
 */
class SyncResourceResponse extends Response
{
}
