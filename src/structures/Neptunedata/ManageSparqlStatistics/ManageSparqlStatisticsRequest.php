<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ManageSparqlStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'disableAutoCompute'|'enableAutoCompute'|'refresh' $mode
 */
class ManageSparqlStatisticsRequest extends Request
{
    /**
     * @param array{mode?: 'disableAutoCompute'|'enableAutoCompute'|'refresh'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
