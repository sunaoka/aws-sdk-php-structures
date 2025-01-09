<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalyMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AnomalyMonitor $AnomalyMonitor
 * @property list<Shapes\ResourceTag> $ResourceTags
 */
class CreateAnomalyMonitorRequest extends Request
{
    /**
     * @param array{
     *     AnomalyMonitor: Shapes\AnomalyMonitor,
     *     ResourceTags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
