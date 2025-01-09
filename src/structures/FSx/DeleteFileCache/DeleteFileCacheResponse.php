<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FileCacheId
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED' $Lifecycle
 */
class DeleteFileCacheResponse extends Response
{
}
