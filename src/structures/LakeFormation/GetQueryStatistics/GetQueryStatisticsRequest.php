<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryId
 */
class GetQueryStatisticsRequest extends Request
{
    /**
     * @param array{QueryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
