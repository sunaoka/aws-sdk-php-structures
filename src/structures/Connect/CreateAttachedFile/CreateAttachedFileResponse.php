<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAttachedFile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FileArn
 * @property string|null $FileId
 * @property string|null $CreationTime
 * @property 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|null $FileStatus
 */
class CreateAttachedFileResponse extends Response
{
}
