<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetIndexRebuildStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $rebuildId
 */
class GetIndexRebuildStatusRequest extends Request
{
    /**
     * @param array{rebuildId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
