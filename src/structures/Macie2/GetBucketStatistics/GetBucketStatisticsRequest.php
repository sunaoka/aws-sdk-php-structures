<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountId
 */
class GetBucketStatisticsRequest extends Request
{
    /**
     * @param array{accountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
