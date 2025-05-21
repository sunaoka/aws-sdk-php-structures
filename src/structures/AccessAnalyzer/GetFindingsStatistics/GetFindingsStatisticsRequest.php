<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 */
class GetFindingsStatisticsRequest extends Request
{
    /**
     * @param array{analyzerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
