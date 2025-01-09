<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ManagePropertygraphStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'disableAutoCompute'|'enableAutoCompute'|'refresh' $mode
 */
class ManagePropertygraphStatisticsRequest extends Request
{
    /**
     * @param array{mode?: 'disableAutoCompute'|'enableAutoCompute'|'refresh'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
