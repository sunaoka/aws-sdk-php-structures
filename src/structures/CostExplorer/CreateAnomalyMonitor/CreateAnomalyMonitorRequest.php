<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalyMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AnomalyMonitor $AnomalyMonitor
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 */
class CreateAnomalyMonitorRequest extends Request
{
    /**
     * @param array{
     *     AnomalyMonitor: Shapes\AnomalyMonitor,
     *     ResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
