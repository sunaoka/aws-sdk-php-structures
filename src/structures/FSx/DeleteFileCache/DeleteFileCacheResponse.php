<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FileCacheId
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|null $Lifecycle
 */
class DeleteFileCacheResponse extends Response
{
}
