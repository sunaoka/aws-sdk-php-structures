<?php

namespace Sunaoka\Aws\Structures\Continuum\DisassociateCollector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $collectorArn
 */
class DisassociateCollectorRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     collectorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
