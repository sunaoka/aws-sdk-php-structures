<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateArchive;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArchiveArn
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class UpdateArchiveResponse extends Response
{
}
