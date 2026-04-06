<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelLoaderJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadId
 */
class CancelLoaderJobRequest extends Request
{
    /**
     * @param array{loadId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
