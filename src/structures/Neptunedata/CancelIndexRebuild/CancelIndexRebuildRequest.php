<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelIndexRebuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $rebuildId
 */
class CancelIndexRebuildRequest extends Request
{
    /**
     * @param array{rebuildId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
