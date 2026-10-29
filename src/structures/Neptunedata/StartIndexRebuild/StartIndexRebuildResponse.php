<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartIndexRebuild;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PREPARING'|'REBUILDING'|'COMPLETED'|'FAILED'|'CANCELLED'|'CANCELLING' $status
 * @property string $rebuildId
 * @property 'ALL'|'QUADS'|'DICTIONARIES' $scope
 * @property int<1, max> $concurrency
 * @property 'LOW'|'MEDIUM'|'HIGH' $writeBufferSize
 */
class StartIndexRebuildResponse extends Response
{
}
