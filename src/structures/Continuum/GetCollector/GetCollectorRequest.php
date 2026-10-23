<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCollector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectorId
 */
class GetCollectorRequest extends Request
{
    /**
     * @param array{collectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
