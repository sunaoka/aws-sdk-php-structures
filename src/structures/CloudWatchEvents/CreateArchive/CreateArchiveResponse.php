<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateArchive;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArchiveArn
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class CreateArchiveResponse extends Response
{
}
