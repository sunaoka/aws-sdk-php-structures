<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelIndexRebuild;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PREPARING'|'REBUILDING'|'COMPLETED'|'FAILED'|'CANCELLED'|'CANCELLING' $status
 * @property int<1, max> $concurrency
 * @property 'LOW'|'MEDIUM'|'HIGH' $writeBufferSize
 */
class CancelIndexRebuildResponse extends Response
{
}
