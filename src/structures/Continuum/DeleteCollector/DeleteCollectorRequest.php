<?php

namespace Sunaoka\Aws\Structures\Continuum\DeleteCollector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectorId
 */
class DeleteCollectorRequest extends Request
{
    /**
     * @param array{collectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
