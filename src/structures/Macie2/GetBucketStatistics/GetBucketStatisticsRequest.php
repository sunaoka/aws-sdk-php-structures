<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class GetBucketStatisticsRequest extends Request
{
    /**
     * @param array{accountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
