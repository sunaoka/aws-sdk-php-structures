<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateArchive;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArchiveArn
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class CreateArchiveResponse extends Response
{
}
