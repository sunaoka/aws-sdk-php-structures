<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'ACTIVE'|'DELETED'|'FAILED'|null $status
 * @property array<string, string>|null $tags
 */
class CreateRunCacheResponse extends Response
{
}
