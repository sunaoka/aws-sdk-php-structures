<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunCache;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'ACTIVE'|'DELETED'|'FAILED' $status
 * @property array<string, string> $tags
 */
class CreateRunCacheResponse extends Response
{
}
